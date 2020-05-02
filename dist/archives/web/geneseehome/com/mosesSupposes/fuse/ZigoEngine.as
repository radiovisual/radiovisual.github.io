class com.mosesSupposes.fuse.ZigoEngine
{
    var _listeners, addListener, _currentframe, gotoAndStop, _totalframes;
    static var updateTime, tweenHolder, playing, ints, lockedTweens, tweenList, now, updateIntId;
    function ZigoEngine()
    {
    } // End of the function
    static function simpleSetup()
    {
        com.mosesSupposes.fuse.ZigoEngine.initialize(MovieClip.prototype, TextField.prototype);
    } // End of the function
    static function initialize()
    {
        com.mosesSupposes.fuse.penner_easing.Back;
        com.mosesSupposes.fuse.penner_easing.Bounce;
        com.mosesSupposes.fuse.penner_easing.Circ;
        com.mosesSupposes.fuse.penner_easing.Cubic;
        com.mosesSupposes.fuse.penner_easing.Elastic;
        com.mosesSupposes.fuse.penner_easing.Expo;
        com.mosesSupposes.fuse.penner_easing.Linear;
        com.mosesSupposes.fuse.penner_easing.Quad;
        com.mosesSupposes.fuse.penner_easing.Quart;
        com.mosesSupposes.fuse.penner_easing.Quint;
        com.mosesSupposes.fuse.penner_easing.Sine;
        if (com.mosesSupposes.fuse.ZigoEngine.inited != true || !com.mosesSupposes.fuse.ZigoEngine.updateTime && com.mosesSupposes.fuse.ZigoEngine.tweenHolder._name == undefined)
        {
            if (MovieClip.prototype.tween != undefined && typeof(_global.$tweenManager) == "object")
            {
                trace ("\r**************** TWEEN ENGINE ERROR! ****************\rDO NOT USE #include \"lmc_tween.as\" with this version!\r*****************************************************\r");
            } // end if
            inited = true;
            playing = false;
            ints = new Array();
            lockedTweens = new Object();
            tweenList = new Array();
        }
        else
        {
            com.mosesSupposes.fuse.ZigoEngine.cleanUp();
            com.mosesSupposes.fuse.ZigoEngine.init();
        } // end else if
        if (arguments.length > 0)
        {
            com.mosesSupposes.fuse.ZigoEngine.initializeTargets.apply(com.mosesSupposes.fuse.ZigoEngine, arguments);
            com.mosesSupposes.fuse.ZigoEngine.addShortcutsTo.apply(com.mosesSupposes.fuse.ZigoEngine, arguments);
        } // end if
    } // End of the function
    static function deinitialize()
    {
        var _loc2;
        if (arguments.length == 0 && MovieClip.prototype.__zigoEnabled === true)
        {
            _loc2 = [MovieClip.prototype, TextField.prototype];
        }
        else
        {
            _loc2 = arguments;
        } // end else if
        com.mosesSupposes.fuse.ZigoEngine.deinitializeTargets.apply(com.mosesSupposes.fuse.ZigoEngine, _loc2);
        com.mosesSupposes.fuse.ZigoEngine.removeShortcutsFrom.apply(com.mosesSupposes.fuse.ZigoEngine, _loc2);
    } // End of the function
    static function getUpdateInterval()
    {
        return (com.mosesSupposes.fuse.ZigoEngine.updateTime);
    } // End of the function
    static function setUpdateInterval(time)
    {
        if (com.mosesSupposes.fuse.ZigoEngine.playing)
        {
            com.mosesSupposes.fuse.ZigoEngine.deinit();
            updateTime = time;
            com.mosesSupposes.fuse.ZigoEngine.init();
        }
        else
        {
            updateTime = time;
        } // end else if
    } // End of the function
    static function getControllerDepth()
    {
        return (com.mosesSupposes.fuse.ZigoEngine._th_depth);
    } // End of the function
    static function setControllerDepth(v)
    {
        if (_global.isNaN(v) == true)
        {
            return;
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.tweenHolder._name != undefined)
        {
            com.mosesSupposes.fuse.ZigoEngine.tweenHolder.swapDepths(v);
        }
        else
        {
            _th_depth = v;
        } // end else if
    } // End of the function
    static function doShortcut(obj, methodName)
    {
        if (com.mosesSupposes.fuse.ZigoEngine.inited != true || !com.mosesSupposes.fuse.ZigoEngine.updateTime && com.mosesSupposes.fuse.ZigoEngine.tweenHolder._name == undefined)
        {
            com.mosesSupposes.fuse.ZigoEngine.initialize();
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.shortcuts == null)
        {
            com.mosesSupposes.fuse.ZigoEngine.initShortcuts();
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.shortcuts[methodName] == undefined)
        {
            return;
        } // end if
        obj = arguments.shift();
        methodName = String(arguments.shift());
        if (obj instanceof Array)
        {
            for (var _loc4 in obj)
            {
                com.mosesSupposes.fuse.ZigoEngine.shortcuts[methodName].apply(obj[_loc4], arguments);
            } // end of for...in
        }
        else
        {
            com.mosesSupposes.fuse.ZigoEngine.shortcuts[methodName].apply(obj, arguments);
        } // end else if
    } // End of the function
    static function doTween(obj, props, pEnd, seconds, animType, delay, callback, extra1, extra2)
    {
        if (obj instanceof Array)
        {
            obj = arguments.shift();
            for (var i in obj)
            {
                com.mosesSupposes.fuse.ZigoEngine.doTween.apply(com.mosesSupposes.fuse.ZigoEngine, [obj[i]].concat(arguments));
            } // end of for...in
            return;
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.isTweenLocked(obj))
        {
            trace ("Tween not added, this target is locked: " + obj);
            return;
        } // end if
        if (arguments.length < 2)
        {
            trace ("Tween not added, missing props and/or end values.");
            return;
        } // end if
        if (typeof(props) == "string")
        {
            if (props.indexOf(",") > -1)
            {
                props = props.split(" ").join("").split(",");
            }
            else
            {
                props = [props];
            } // end if
        } // end else if
        if (!(pEnd instanceof Array))
        {
            pEnd = [pEnd];
            while (pEnd.length < props.length)
            {
                pEnd.push(pEnd[0]);
            } // end while
        } // end if
        if (seconds == undefined)
        {
            seconds = 2;
        }
        else if (seconds < 1.000000E-002)
        {
            seconds = 0;
        } // end else if
        if (delay < 1.000000E-002 || delay == undefined)
        {
            delay = 0;
        } // end if
        switch (typeof(animType))
        {
            case "string":
            {
                animType = animType.toLowerCase();
                if (animType == "linear")
                {
                    var eqf = com.mosesSupposes.fuse.penner_easing.Linear.easeNone;
                }
                else if (animType.indexOf("easeoutin") == 0)
                {
                    var t = animType.substr(9);
                    t = t.charAt(0).toUpperCase() + t.substr(1);
                    var eqf = com.mosesSupposes.fuse.penner_easing[t].easeOutIn;
                }
                else if (animType.indexOf("easeinout") == 0)
                {
                    var t = animType.substr(9);
                    t = t.charAt(0).toUpperCase() + t.substr(1);
                    var eqf = com.mosesSupposes.fuse.penner_easing[t].easeInOut;
                }
                else if (animType.indexOf("easein") == 0)
                {
                    var t = animType.substr(6);
                    t = t.charAt(0).toUpperCase() + t.substr(1);
                    var eqf = com.mosesSupposes.fuse.penner_easing[t].easeIn;
                }
                else if (animType.indexOf("easeout") == 0)
                {
                    var t = animType.substr(7);
                    t = t.charAt(0).toUpperCase() + t.substr(1);
                    var eqf = com.mosesSupposes.fuse.penner_easing[t].easeOut;
                } // end else if
                if (eqf == undefined)
                {
                    var eqf = com.mosesSupposes.fuse.penner_easing.Expo.easeOut;
                } // end if
                break;
            } 
            case "function":
            {
                var eqf = animType;
                break;
            } 
            case "object":
            {
                if (animType.ease != undefined && animType.pts != undefined)
                {
                    var eqf = animType.ease;
                    extra1 = animType.pts;
                }
                else
                {
                    var eqf = com.mosesSupposes.fuse.penner_easing.Expo.easeOut;
                } // end else if
                break;
            } 
            default:
            {
                var eqf = com.mosesSupposes.fuse.penner_easing.Expo.easeOut;
            } 
        } // End of switch
        switch (typeof(callback))
        {
            case "function":
            {
                callback = {func: callback, scope: obj._parent};
                break;
            } 
            case "string":
            {
                var ilp;
                var funcp;
                var scope;
                var args;
                var a;
                ilp = callback.indexOf("(");
                funcp = callback.slice(0, ilp);
                scope = funcp.slice(0, funcp.lastIndexOf("."));
                var func = eval(funcp);
                args = callback.slice(ilp + 1, callback.lastIndexOf(")")).split(",");
                var i = 0;
                while (i < args.length)
                {
                    a = eval(args[i]);
                    if (a != undefined)
                    {
                        args[i] = a;
                    } // end if
                    ++i;
                } // end while
                callback = {func: func, scope: scope, args: args};
                break;
            } 
        } // End of switch
        if (com.mosesSupposes.fuse.ZigoEngine.AUTOSTOP == true)
        {
            com.mosesSupposes.fuse.ZigoEngine.removeTween(obj);
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.inited != true || !com.mosesSupposes.fuse.ZigoEngine.updateTime && com.mosesSupposes.fuse.ZigoEngine.tweenHolder._name == undefined)
        {
            com.mosesSupposes.fuse.ZigoEngine.initialize();
        } // end if
        if (obj.__zigoEnabled == undefined)
        {
            com.mosesSupposes.fuse.ZigoEngine.initializeTargets(obj);
            obj.__zigoEnabled = "temporary";
        } // end if
        if (delay > 0)
        {
            com.mosesSupposes.fuse.ZigoEngine.addTweenWithDelay(delay, obj, props, pEnd, seconds, eqf, callback, extra1, extra2);
        }
        else
        {
            com.mosesSupposes.fuse.ZigoEngine.addTween(obj, props, pEnd, seconds, eqf, callback, extra1, extra2);
        } // end else if
    } // End of the function
    static function getColorTransObj(type, amt, rgb)
    {
        switch (type)
        {
            case "brightness":
            {
                var _loc4 = 100 - Math.abs(amt);
                var _loc6 = 0;
                if (amt > 0)
                {
                    _loc6 = 256 * (amt / 100);
                } // end if
                return ({ra: _loc4, rb: _loc6, ga: _loc4, gb: _loc6, ba: _loc4, bb: _loc6});
            } 
            case "brightOffset":
            {
                _loc6 = 256 * (amt / 100);
                return ({ra: 100, rb: _loc6, ga: 100, gb: _loc6, ba: 100, bb: _loc6});
            } 
            case "contrast":
            {
                var _loc2 = {};
                _loc2.ra = _loc2.ga = _loc2.ba = amt;
                _loc2.rb = _loc2.gb = _loc2.bb = 128 - 1.280000E+000 * amt;
                return (_loc2);
            } 
            case "invertColor":
            {
                _loc2 = {};
                _loc2.ra = _loc2.ga = _loc2.ba = 100 - 2 * amt;
                _loc2.rb = _loc2.gb = _loc2.bb = amt * 2.550000E+000;
                return (_loc2);
            } 
            case "tint":
            {
                if (rgb == undefined || rgb == null)
                {
                    break;
                } // end if
                var _loc8 = rgb >> 16;
                var _loc9 = rgb >> 8 & 255;
                var _loc7 = rgb & 255;
                var _loc5 = amt / 100;
                _loc2 = {rb: _loc8 * _loc5, gb: _loc9 * _loc5, bb: _loc7 * _loc5};
                _loc2.ra = _loc2.ga = _loc2.ba = 100 - amt;
                return (_loc2);
            } 
        } // End of switch
        return ({rb: 0, ra: 100, gb: 0, ga: 100, bb: 0, ba: 100});
    } // End of the function
    static function initializeTargets()
    {
        for (var _loc5 in arguments)
        {
            var _loc4 = arguments[_loc5];
            if (_loc4.__zigoEnabled == undefined)
            {
                _loc4.__zigoEnabled = true;
                _global.ASSetPropFlags(_loc4, "__zigoEnabled", 1, true);
                if (targetPath(_loc4) == undefined && _loc4.__proto__ == undefined)
                {
                    _loc4.targetPath = "__zigoTempID_" + com.mosesSupposes.fuse.ZigoEngine.objTempID;
                    _global.ASSetPropFlags(_loc4, "targetPath", 1, true);
                    objTempID = ++com.mosesSupposes.fuse.ZigoEngine.objTempID;
                } // end if
                if (_loc4._listeners != undefined && _loc4.addListener != undefined)
                {
                    continue;
                } // end if
                if (_loc4.__proto__ != undefined)
                {
                    _loc4.addListener = function ()
                    {
                        if (!_listeners)
                        {
                            AsBroadcaster.initialize(this);
                        } // end if
                        addListener.apply(this, arguments);
                    };
                }
                else
                {
                    AsBroadcaster.initialize(_loc4);
                } // end else if
                _global.ASSetPropFlags(_loc4, "addListener", 1, true);
            } // end if
        } // end of for...in
    } // End of the function
    static function deinitializeTargets()
    {
        for (var _loc4 in arguments)
        {
            var _loc3 = arguments[_loc4];
            _global.ASSetPropFlags(_loc3, "__zigoEnabled", 4, true);
            delete _loc3.__zigoEnabled;
            if (_loc3.targetPath.indexOf("__zigoTempID") > -1)
            {
                _global.ASSetPropFlags(_loc3, "targetPath", 4, true);
                delete _loc3.targetPath;
            } // end if
        } // end of for...in
    } // End of the function
    static function addShortcutsTo()
    {
        if (com.mosesSupposes.fuse.ZigoEngine.shortcuts == null)
        {
            com.mosesSupposes.fuse.ZigoEngine.initShortcuts();
        } // end if
        for (var _loc5 in arguments)
        {
            var _loc3 = arguments[_loc5];
            if (_loc3 == MovieClip.prototype || typeof(_loc3) == "movieclip")
            {
                for (var _loc4 in com.mosesSupposes.fuse.ZigoEngine.mcshortcuts)
                {
                    _loc3[_loc4] = com.mosesSupposes.fuse.ZigoEngine.mcshortcuts[_loc4];
                    _global.ASSetPropFlags(_loc3, _loc4, 1, true);
                } // end of for...in
                _loc3.addProperty("_frame", _loc3.getFrame, _loc3.setFrame);
                _global.ASSetPropFlags(_loc3, "_frame", 1, true);
            } // end if
            for (var _loc4 in com.mosesSupposes.fuse.ZigoEngine.shortcuts)
            {
                _loc3[_loc4] = com.mosesSupposes.fuse.ZigoEngine.shortcuts[_loc4];
                _global.ASSetPropFlags(_loc3, _loc4, 1, true);
            } // end of for...in
        } // end of for...in
    } // End of the function
    static function removeShortcutsFrom()
    {
        if (com.mosesSupposes.fuse.ZigoEngine.shortcuts == null)
        {
            com.mosesSupposes.fuse.ZigoEngine.initShortcuts();
        } // end if
        for (var _loc5 in arguments)
        {
            var _loc3 = arguments[_loc5];
            if (_loc3 == MovieClip.prototype || typeof(_loc3) == "movieclip")
            {
                for (var _loc4 in com.mosesSupposes.fuse.ZigoEngine.mcshortcuts)
                {
                    delete _loc3[_loc4];
                    _global.ASSetPropFlags(_loc3, "_frame", 4, true);
                    delete _loc3._frame;
                } // end of for...in
            } // end if
            for (var _loc4 in com.mosesSupposes.fuse.ZigoEngine.shortcuts)
            {
                _global.ASSetPropFlags(_loc3, _loc4, 4, true);
                if (_loc3[_loc4] != undefined)
                {
                    delete _loc3[_loc4];
                } // end if
            } // end of for...in
        } // end of for...in
    } // End of the function
    static function addTween(obj, props, pEnd, sec, eqFunc, callback, extra1, extra2)
    {
        if (typeof(com.mosesSupposes.fuse.ZigoEngine.__oDetour.AT) == "function")
        {
            if (com.mosesSupposes.fuse.ZigoEngine.__oDetour.AT.apply(com.mosesSupposes.fuse.ZigoEngine.__oDetour.scope, arguments) === true)
            {
                return;
            } // end if
        } // end if
        var _loc4;
        var _loc13;
        var _loc6;
        var _loc3;
        var _loc2;
        if (!com.mosesSupposes.fuse.ZigoEngine.playing)
        {
            com.mosesSupposes.fuse.ZigoEngine.init();
        } // end if
        var _loc12 = [];
        for (var _loc4 in props)
        {
            _loc13 = props[_loc4];
            _loc6 = true;
            if (_loc13.substr(0, 4) != "_ct_")
            {
                var _loc17 = typeof(pEnd[_loc4]) == "string" ? (Number(pEnd[_loc4])) : (pEnd[_loc4] - obj[_loc13]);
                if (com.mosesSupposes.fuse.ZigoEngine.AUTOOVERWRITE == true)
                {
                    for (var _loc3 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
                    {
                        _loc2 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc3];
                        if (_loc2.obj == obj && _loc2.pp == _loc13)
                        {
                            _loc2.ps = obj[_loc13];
                            _loc2.ch = _loc17;
                            _loc2.ts = com.mosesSupposes.fuse.ZigoEngine.now;
                            _loc2.d = sec * 1000;
                            _loc2.ef = eqFunc;
                            _loc2.cb = callback;
                            _loc2.e1 = extra1;
                            _loc2.e2 = extra2;
                            _loc2.pt = -1;
                            _loc6 = false;
                            _loc12.push(_loc2.pp);
                            break;
                        } // end if
                    } // end of for...in
                } // end if
                if (_loc6)
                {
                    com.mosesSupposes.fuse.ZigoEngine.tweenList.unshift({obj: obj, pp: _loc13, ps: obj[_loc13], ch: _loc17, ts: com.mosesSupposes.fuse.ZigoEngine.now, d: sec * 1000, ef: eqFunc, cb: callback, e1: extra1, e2: extra2, pt: -1});
                } // end if
                continue;
            } // end if
            var _loc16 = new Color(obj);
            var _loc20 = _loc16.getTransform();
            var _loc19 = {};
            for (var _loc3 in pEnd[_loc4])
            {
                if (pEnd[_loc4][_loc3] != _loc20[_loc3] && pEnd[_loc4][_loc3] != undefined)
                {
                    _loc19[_loc3] = typeof(pEnd[_loc4][_loc3]) == "string" ? (_loc20[_loc3] + Number(pEnd[_loc4][_loc3])) : (pEnd[_loc4][_loc3] - _loc20[_loc3]);
                } // end if
            } // end of for...in
            if (com.mosesSupposes.fuse.ZigoEngine.AUTOOVERWRITE == true)
            {
                for (var _loc3 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
                {
                    _loc2 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc3];
                    if (_loc2.obj == obj && _loc2.ctm != undefined)
                    {
                        _loc2.c = _loc16;
                        _loc2.stm = _loc20;
                        (_loc2.ctm = _loc19, _loc2.ts = com.mosesSupposes.fuse.ZigoEngine.now);
                        _loc2.d = sec * 1000;
                        _loc2.ef = eqFunc;
                        _loc2.cb = callback;
                        _loc2.e1 = extra1;
                        _loc2.e2 = extra2;
                        _loc2.pt = -1;
                        _loc6 = false;
                        _loc12.push("_ct_");
                        break;
                    } // end if
                } // end of for...in
            } // end if
            if (_loc6)
            {
                com.mosesSupposes.fuse.ZigoEngine.tweenList.unshift({obj: obj, c: _loc16, stm: _loc20, ctm: _loc19, ts: com.mosesSupposes.fuse.ZigoEngine.now, d: sec * 1000, ef: eqFunc, cb: callback, e1: extra1, e2: extra2, pt: -1});
            } // end if
        } // end of for...in
        if (com.mosesSupposes.fuse.ZigoEngine.BROADCAST_EVENTS)
        {
            if (_loc12.length > 0)
            {
                obj.broadcastMessage("onTweenInterrupt", {target: obj, props: _loc12});
            } // end if
            obj.broadcastMessage("onTweenStart", {target: obj, props: props});
        } // end if
        if (callback.startfunc != undefined)
        {
            var _loc27 = callback.startfunc;
            if (typeof(_loc27) == "string" && callback.startscope != undefined)
            {
                _loc27 = callback.startscope[_loc27];
            } // end if
            _loc27.apply(callback.startscope, callback.startargs);
        } // end if
        if (sec == 0)
        {
            com.mosesSupposes.fuse.ZigoEngine.update();
        } // end if
    } // End of the function
    static function addTweenWithDelay(delay, obj, props, pEnd, sec, eqFunc, callback, extra1, extra2)
    {
        if (typeof(com.mosesSupposes.fuse.ZigoEngine.__oDetour.ATWD) == "function")
        {
            if (com.mosesSupposes.fuse.ZigoEngine.__oDetour.ATWD.apply(com.mosesSupposes.fuse.ZigoEngine.__oDetour.scope, arguments) === true)
            {
                return;
            } // end if
        } // end if
        var il;
        var _loc2;
        il = com.mosesSupposes.fuse.ZigoEngine.ints.length;
        _loc2 = setInterval(function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.removeDelayedTween(il);
            if (obj.__zigoEnabled != undefined)
            {
                com.mosesSupposes.fuse.ZigoEngine.addTween(obj, props, pEnd, sec, eqFunc, callback, extra1, extra2);
            } // end if
        }, delay * 1000);
        com.mosesSupposes.fuse.ZigoEngine.ints[il] = {obj: obj, props: props, pend: pEnd, intid: _loc2, st: getTimer(), delay: delay * 1000, args: arguments.slice(1), pt: -1};
        if (!com.mosesSupposes.fuse.ZigoEngine.playing)
        {
            com.mosesSupposes.fuse.ZigoEngine.init();
        } // end if
    } // End of the function
    static function removeTween(obj, props)
    {
        var _loc7;
        var _loc2;
        var _loc4;
        _loc7 = false;
        if (props == undefined && com.mosesSupposes.fuse.ZigoEngine.BROADCAST_EVENTS != true)
        {
            _loc7 = true;
        } // end if
        _loc2 = com.mosesSupposes.fuse.ZigoEngine.tweenList.length;
        var _loc3 = {};
        while (_loc2--)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc2].obj == obj)
            {
                if (_loc7)
                {
                    com.mosesSupposes.fuse.ZigoEngine.tweenList.splice(_loc2, 1);
                    continue;
                } // end if
                for (var _loc4 in props)
                {
                    if (com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc2].pp == props[_loc4])
                    {
                        com.mosesSupposes.fuse.ZigoEngine.tweenList.splice(_loc2, 1);
                        if (_loc3[targetPath(obj)] == undefined)
                        {
                            _loc3[targetPath(obj)] = {t: obj, p: []};
                        } // end if
                        _loc3[targetPath(obj)].p.push(props[_loc4]);
                        continue;
                    } // end if
                    if (props[_loc4] == "_ct_" && com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc2].ctm != undefined && com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc2].obj == obj)
                    {
                        com.mosesSupposes.fuse.ZigoEngine.tweenList.splice(_loc2, 1);
                        if (_loc3[targetPath(obj)] == undefined)
                        {
                            _loc3[targetPath(obj)] = {t: obj, p: []};
                        } // end if
                        _loc3[targetPath(obj)].p.push("_ct_");
                    } // end if
                } // end of for...in
            } // end if
        } // end while
        _loc2 = com.mosesSupposes.fuse.ZigoEngine.ints.length;
        while (_loc2--)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].obj == obj)
            {
                if (_loc7)
                {
                    com.mosesSupposes.fuse.ZigoEngine.removeDelayedTween(Number(_loc2));
                    continue;
                } // end if
                for (var _loc4 in props)
                {
                    for (var _loc10 in com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].props)
                    {
                        if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].props[_loc10] == props[_loc4])
                        {
                            com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].props.splice(_loc10, 1);
                            com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].pend.splice(_loc10, 1);
                            if (_loc3[targetPath(obj)] == undefined)
                            {
                                _loc3[targetPath(obj)] = {t: obj, p: []};
                            } // end if
                            _loc3[targetPath(obj)].p.push(props[_loc4]);
                        } // end if
                    } // end of for...in
                    if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].props.length == 0)
                    {
                        clearInterval(com.mosesSupposes.fuse.ZigoEngine.ints[_loc2].intid);
                    } // end if
                } // end of for...in
            } // end if
        } // end while
        if (obj.__zigoEnabled == "temporary")
        {
            if (com.mosesSupposes.fuse.ZigoEngine.getTweens(obj) == 0)
            {
                com.mosesSupposes.fuse.ZigoEngine.deinitializeTargets(obj);
            } // end if
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.BROADCAST_EVENTS)
        {
            for (var _loc10 in _loc3)
            {
                if (_loc3[_loc10].p.length > 0)
                {
                    _loc3[_loc10].t.broadcastMessage("onTweenInterrupt", {target: _loc3[_loc10].t, props: _loc3[_loc10].p});
                } // end if
            } // end of for...in
        } // end if
        if (com.mosesSupposes.fuse.ZigoEngine.tweenList.length == 0)
        {
            com.mosesSupposes.fuse.ZigoEngine.deinit();
        } // end if
    } // End of the function
    static function isTweening(obj, prop)
    {
        var _loc3 = prop == undefined;
        for (var _loc5 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            var _loc1 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc5];
            if (com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc5].obj == obj && com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc5].pt == -1 && (_loc3 || prop == _loc1.pp || prop == "_ct_" && _loc1.ctm != undefined))
            {
                return (true);
            } // end if
        } // end of for...in
        return (false);
    } // End of the function
    static function getTweens(obj)
    {
        var _loc1 = 0;
        for (var _loc3 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc3].obj == obj)
            {
                ++_loc1;
            } // end if
        } // end of for...in
        return (_loc1);
    } // End of the function
    static function lockTween(obj, bool)
    {
        com.mosesSupposes.fuse.ZigoEngine.lockedTweens[targetPath(obj)] = bool;
    } // End of the function
    static function isTweenLocked(obj)
    {
        if (com.mosesSupposes.fuse.ZigoEngine.lockedTweens[targetPath(obj)] == undefined)
        {
            return (false);
        }
        else
        {
            return (com.mosesSupposes.fuse.ZigoEngine.lockedTweens[targetPath(obj)]);
        } // end else if
    } // End of the function
    static function ffTween(obj, propsObj)
    {
        var _loc3 = obj == undefined;
        var _loc5 = propsObj == undefined;
        for (var _loc7 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            var _loc1 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc7];
            if ((_loc1.obj == obj || _loc3) && (_loc5 || propsObj[_loc1.pp] == true))
            {
                if (_loc1.pt != -1)
                {
                    _loc1.pt = -1;
                } // end if
                _loc1.ts = com.mosesSupposes.fuse.ZigoEngine.now - _loc1.d;
            } // end if
        } // end of for...in
        for (var _loc7 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc7] != undefined)
            {
                if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc7].obj == obj || _loc3)
                {
                    if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc7].obj.__zigoEnabled != undefined)
                    {
                        var _loc2 = com.mosesSupposes.fuse.ZigoEngine.ints[_loc7].args;
                        _loc2[3] = 0;
                        com.mosesSupposes.fuse.ZigoEngine.addTween.apply(com.mosesSupposes.fuse.ZigoEngine, _loc2);
                    } // end if
                    com.mosesSupposes.fuse.ZigoEngine.removeDelayedTween(Number(_loc7));
                } // end if
            } // end if
        } // end of for...in
        com.mosesSupposes.fuse.ZigoEngine.update();
    } // End of the function
    static function rewTween(obj, propsObj)
    {
        var _loc2 = obj == undefined;
        var _loc4 = propsObj == undefined;
        for (var _loc6 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            var _loc1 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc6];
            if ((_loc1.obj == obj || _loc2) && (_loc4 || propsObj[_loc1.pp] == true))
            {
                if (_loc1.pt != -1)
                {
                    _loc1.pt = -1;
                } // end if
                _loc1.ts = com.mosesSupposes.fuse.ZigoEngine.now;
            } // end if
        } // end of for...in
        for (var _loc6 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc6] != undefined)
            {
                if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc6].obj == obj || _loc2)
                {
                    if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc6].obj.__zigoEnabled != undefined)
                    {
                        com.mosesSupposes.fuse.ZigoEngine.addTween.apply(com.mosesSupposes.fuse.ZigoEngine, com.mosesSupposes.fuse.ZigoEngine.ints[_loc6].args);
                    } // end if
                    com.mosesSupposes.fuse.ZigoEngine.removeDelayedTween(Number(_loc6));
                } // end if
            } // end if
        } // end of for...in
        com.mosesSupposes.fuse.ZigoEngine.update();
    } // End of the function
    static function isTweenPaused(obj, prop)
    {
        if (obj == undefined)
        {
            return (null);
        } // end if
        var _loc4 = prop == undefined;
        for (var _loc5 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            var _loc1 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc5];
            if (com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc5].obj == obj && (_loc4 || prop == _loc1.pp || prop == "_ct_" && _loc1.ctm != undefined))
            {
                return (Boolean(com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc5].pt != -1));
            } // end if
        } // end of for...in
        for (var _loc5 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc5] != undefined && com.mosesSupposes.fuse.ZigoEngine.ints[_loc5].obj == obj)
            {
                return (Boolean(com.mosesSupposes.fuse.ZigoEngine.ints[_loc5].pt != -1));
            } // end if
        } // end of for...in
        return (false);
    } // End of the function
    static function pauseTween(obj, propsObj)
    {
        var _loc2 = obj == undefined;
        if (_loc2 == false && com.mosesSupposes.fuse.ZigoEngine.isTweenPaused(obj) == true)
        {
            return;
        } // end if
        var _loc5 = propsObj == undefined;
        for (var _loc6 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            var _loc1 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc6];
            if (_loc1.pt == -1 && (_loc1.obj == obj || _loc2) && (_loc5 || propsObj[_loc1.pp] == true || propsObj._ct_ != undefined && _loc1.ctm != undefined))
            {
                _loc1.pt = com.mosesSupposes.fuse.ZigoEngine.now;
            } // end if
        } // end of for...in
        for (var _loc6 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc6] != undefined)
            {
                if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc6].pt == -1 && (com.mosesSupposes.fuse.ZigoEngine.ints[_loc6].obj == obj || _loc2))
                {
                    com.mosesSupposes.fuse.ZigoEngine.ints[_loc6].pt = com.mosesSupposes.fuse.ZigoEngine.now;
                } // end if
            } // end if
        } // end of for...in
    } // End of the function
    static function unpauseTween(obj, propsObj)
    {
        var _loc3 = obj == undefined;
        if (_loc3 == true && com.mosesSupposes.fuse.ZigoEngine.isTweenPaused(obj) === false)
        {
            return;
        } // end if
        var _loc6 = propsObj == undefined;
        if (!com.mosesSupposes.fuse.ZigoEngine.playing)
        {
            com.mosesSupposes.fuse.ZigoEngine.init();
        } // end if
        for (var _loc1 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            var _loc2 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc1];
            if (_loc2.pt != -1 && (_loc2.obj == obj || _loc3) && (_loc6 || propsObj[_loc2.pp] == true) || propsObj._ct_ != undefined && _loc2.ctm != undefined)
            {
                _loc2.ts = com.mosesSupposes.fuse.ZigoEngine.now - (_loc2.pt - _loc2.ts);
                _loc2.pt = -1;
            } // end if
        } // end of for...in
        for (var _loc1 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc1] != undefined)
            {
                if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].pt != -1 && (com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].obj == obj || _loc3))
                {
                    com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].delay = com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].delay - (com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].pt - com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].st);
                    com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].st = com.mosesSupposes.fuse.ZigoEngine.now;
                    com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].intid = setInterval(function (id)
                    {
                        com.mosesSupposes.fuse.ZigoEngine.addTween.apply(com.mosesSupposes.fuse.ZigoEngine, com.mosesSupposes.fuse.ZigoEngine.ints[id].args);
                        clearInterval(com.mosesSupposes.fuse.ZigoEngine.ints[id].intid);
                        com.mosesSupposes.fuse.ZigoEngine.ints[id] = undefined;
                    }, com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].delay, _loc1);
                } // end if
            } // end if
        } // end of for...in
    } // End of the function
    static function pauseAll()
    {
        com.mosesSupposes.fuse.ZigoEngine.pauseTween();
    } // End of the function
    static function unpauseAll()
    {
        com.mosesSupposes.fuse.ZigoEngine.unpauseTween();
    } // End of the function
    static function stopAll()
    {
        for (var _loc1 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            com.mosesSupposes.fuse.ZigoEngine.removeDelayedTween(Number(_loc1));
        } // end of for...in
        tweenList = new Array();
        com.mosesSupposes.fuse.ZigoEngine.deinit();
    } // End of the function
    static function init()
    {
        if (com.mosesSupposes.fuse.ZigoEngine.updateTime > 0)
        {
            clearInterval(com.mosesSupposes.fuse.ZigoEngine.updateIntId);
            updateIntId = setInterval(function ()
            {
                com.mosesSupposes.fuse.ZigoEngine.update();
            }, com.mosesSupposes.fuse.ZigoEngine.updateTime);
        }
        else
        {
            if (com.mosesSupposes.fuse.ZigoEngine.tweenHolder._name == undefined)
            {
                tweenHolder = _root.createEmptyMovieClip("_th_", com.mosesSupposes.fuse.ZigoEngine._th_depth);
            } // end if
            com.mosesSupposes.fuse.ZigoEngine.tweenHolder.onEnterFrame = function ()
            {
                com.mosesSupposes.fuse.ZigoEngine.update.call(com.mosesSupposes.fuse.ZigoEngine);
            };
        } // end else if
        playing = true;
        now = getTimer();
    } // End of the function
    static function deinit()
    {
        playing = false;
        clearInterval(com.mosesSupposes.fuse.ZigoEngine.updateIntId);
        delete com.mosesSupposes.fuse.ZigoEngine.tweenHolder.onEnterFrame;
    } // End of the function
    static function update()
    {
        var _loc1;
        var _loc9;
        var _loc2;
        var _loc12 = false;
        _loc9 = com.mosesSupposes.fuse.ZigoEngine.tweenList.length;
        if (com.mosesSupposes.fuse.ZigoEngine.BROADCAST_EVENTS)
        {
            var _loc4;
            var _loc7;
            var _loc5;
            var _loc8;
            _loc4 = {};
            _loc7 = {};
            _loc5 = {};
            _loc8 = {};
        } // end if
        while (_loc9--)
        {
            _loc1 = com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc9];
            if (_loc1.obj.__zigoEnabled == undefined)
            {
                _loc12 = true;
                continue;
            } // end if
            if (_loc1.pt != -1)
            {
                continue;
            } // end if
            if (_loc1.ts + _loc1.d > com.mosesSupposes.fuse.ZigoEngine.now)
            {
                if (_loc1.ctm == undefined)
                {
                    if (com.mosesSupposes.fuse.ZigoEngine.ROUND_RESULTS == true)
                    {
                        _loc1.obj[_loc1.pp] = Math.round(_loc1.ef(com.mosesSupposes.fuse.ZigoEngine.now - _loc1.ts, _loc1.ps, _loc1.ch, _loc1.d, _loc1.e1, _loc1.e2));
                    }
                    else
                    {
                        _loc1.obj[_loc1.pp] = _loc1.ef(com.mosesSupposes.fuse.ZigoEngine.now - _loc1.ts, _loc1.ps, _loc1.ch, _loc1.d, _loc1.e1, _loc1.e2);
                    } // end else if
                }
                else
                {
                    var _loc3 = {};
                    for (var _loc2 in _loc1.ctm)
                    {
                        if (com.mosesSupposes.fuse.ZigoEngine.ROUND_RESULTS == true)
                        {
                            _loc3[_loc2] = Math.round(_loc1.ef(com.mosesSupposes.fuse.ZigoEngine.now - _loc1.ts, _loc1.stm[_loc2], _loc1.ctm[_loc2], _loc1.d, _loc1.e1, _loc1.e2));
                            continue;
                        } // end if
                        _loc3[_loc2] = _loc1.ef(com.mosesSupposes.fuse.ZigoEngine.now - _loc1.ts, _loc1.stm[_loc2], _loc1.ctm[_loc2], _loc1.d, _loc1.e1, _loc1.e2);
                    } // end of for...in
                    _loc1.c.setTransform(_loc3);
                } // end else if
                if (com.mosesSupposes.fuse.ZigoEngine.BROADCAST_EVENTS)
                {
                    if (_loc4[targetPath(_loc1.obj)] == undefined)
                    {
                        _loc4[targetPath(_loc1.obj)] = _loc1.obj;
                    } // end if
                    if (_loc5[targetPath(_loc1.obj)] == undefined)
                    {
                        _loc5[targetPath(_loc1.obj)] = [];
                    } // end if
                    _loc5[targetPath(_loc1.obj)].push(_loc1.ctm != undefined ? ("_ct_") : (_loc1.pp));
                } // end if
                if (_loc1.cb.updfunc != undefined)
                {
                    var _loc6 = _loc1.cb.updfunc;
                    if (typeof(_loc6) == "string" && _loc1.cb.updscope != undefined)
                    {
                        _loc6 = _loc1.cb.updscope[_loc6];
                    } // end if
                    _loc6.apply(_loc1.cb.updscope, _loc1.cb.updargs);
                } // end if
                continue;
            } // end if
            if (_loc1.ctm == undefined)
            {
                if (com.mosesSupposes.fuse.ZigoEngine.ROUND_RESULTS == true)
                {
                    _loc1.obj[_loc1.pp] = Math.round(_loc1.ps + _loc1.ch);
                }
                else
                {
                    _loc1.obj[_loc1.pp] = _loc1.ps + _loc1.ch;
                } // end else if
            }
            else
            {
                _loc3 = {};
                if (com.mosesSupposes.fuse.ZigoEngine.ROUND_RESULTS == true)
                {
                    for (var _loc2 in _loc1.ctm)
                    {
                        _loc3[_loc2] = Math.round(_loc1.stm[_loc2] + _loc1.ctm[_loc2]);
                    } // end of for...in
                    _loc1.c.setTransform(_loc3);
                }
                else
                {
                    for (var _loc2 in _loc1.ctm)
                    {
                        _loc3[_loc2] = _loc1.stm[_loc2] + _loc1.ctm[_loc2];
                    } // end of for...in
                    _loc1.c.setTransform(_loc3);
                } // end else if
            } // end else if
            if (com.mosesSupposes.fuse.ZigoEngine.BROADCAST_EVENTS)
            {
                if (_loc4[targetPath(_loc1.obj)] == undefined)
                {
                    _loc4[targetPath(_loc1.obj)] = _loc1.obj;
                } // end if
                if (_loc7[targetPath(_loc1.obj)] == undefined)
                {
                    _loc7[targetPath(_loc1.obj)] = _loc1.obj;
                } // end if
                if (_loc5[targetPath(_loc1.obj)] == undefined)
                {
                    _loc5[targetPath(_loc1.obj)] = [];
                } // end if
                _loc5[targetPath(_loc1.obj)].push(_loc1.ctm != undefined ? ("_ct_") : (_loc1.pp));
                if (_loc8[targetPath(_loc1.obj)] == undefined)
                {
                    _loc8[targetPath(_loc1.obj)] = [];
                } // end if
                _loc8[targetPath(_loc1.obj)].push(_loc1.ctm != undefined ? ("_ct_") : (_loc1.pp));
            } // end if
            if (_loc1.cb.updfunc != undefined)
            {
                _loc6 = _loc1.cb.updfunc;
                if (typeof(_loc6) == "string" && _loc1.cb.updscope != undefined)
                {
                    _loc6 = _loc1.cb.updscope[_loc6];
                } // end if
                _loc6.updfunc.apply(_loc1.cb.updscope, _loc1.cb.updargs);
            } // end if
            if (endt == undefined)
            {
                var endt = new Array();
            } // end if
            endt.push(_loc9);
        } // end while
        if (_loc12)
        {
            com.mosesSupposes.fuse.ZigoEngine.cleanUp();
        } // end if
        for (var _loc2 in _loc4)
        {
            _loc4[_loc2].broadcastMessage("onTweenUpdate", {target: _loc4[_loc2], props: _loc5[_loc2]});
        } // end of for...in
        if (endt != undefined)
        {
            com.mosesSupposes.fuse.ZigoEngine.endTweens(endt);
        } // end if
        for (var _loc2 in _loc7)
        {
            _loc7[_loc2].broadcastMessage("onTweenEnd", {target: _loc7[_loc2], props: _loc8[_loc2]});
        } // end of for...in
        now = getTimer();
        if (com.mosesSupposes.fuse.ZigoEngine.updateTime > 0)
        {
            updateAfterEvent();
        } // end if
    } // End of the function
    static function endTweens(tid_arr)
    {
        var _loc1;
        var _loc9;
        var _loc2;
        var _loc4;
        var _loc8;
        _loc1 = [];
        _loc9 = tid_arr.length;
        for (var _loc2 = 0; _loc2 < _loc9; ++_loc2)
        {
            var _loc5 = com.mosesSupposes.fuse.ZigoEngine.tweenList[tid_arr[_loc2]].obj;
            _loc4 = com.mosesSupposes.fuse.ZigoEngine.tweenList[tid_arr[_loc2]].cb;
            if (_loc4 != undefined)
            {
                var _loc6 = true;
                for (var _loc8 in _loc1)
                {
                    if (_loc1[_loc8] == _loc4)
                    {
                        _loc6 = false;
                        break;
                    } // end if
                } // end of for...in
                if (_loc6)
                {
                    _loc1.push(_loc4);
                } // end if
            } // end if
            com.mosesSupposes.fuse.ZigoEngine.tweenList.splice(tid_arr[_loc2], 1);
            if (_loc5.__zigoEnabled == "temporary")
            {
                if (com.mosesSupposes.fuse.ZigoEngine.getTweens(_loc5) == 0)
                {
                    com.mosesSupposes.fuse.ZigoEngine.deinitializeTargets(_loc5);
                } // end if
            } // end if
        } // end of for
        for (var _loc2 = 0; _loc2 < _loc1.length; ++_loc2)
        {
            var _loc3 = _loc1[_loc2].func;
            if (typeof(_loc3) == "string" && _loc1[_loc2].scope != undefined)
            {
                _loc3 = _loc1[_loc2].scope[_loc3];
            } // end if
            _loc3.apply(_loc1[_loc2].scope, _loc1[_loc2].args);
        } // end of for
        if (com.mosesSupposes.fuse.ZigoEngine.tweenList.length == 0)
        {
            com.mosesSupposes.fuse.ZigoEngine.deinit();
        } // end if
    } // End of the function
    static function removeDelayedTween(index)
    {
        clearInterval(com.mosesSupposes.fuse.ZigoEngine.ints[index].intid);
        com.mosesSupposes.fuse.ZigoEngine.ints[index] = undefined;
        var _loc1 = true;
        for (var _loc2 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc2] != undefined)
            {
                _loc1 = false;
                break;
            } // end if
        } // end of for...in
        if (_loc1)
        {
            ints = [];
        } // end if
    } // End of the function
    static function cleanUp()
    {
        if (!(com.mosesSupposes.fuse.ZigoEngine.tweenList instanceof Array && com.mosesSupposes.fuse.ZigoEngine.tweenList.length > 0))
        {
            return;
        } // end if
        for (var _loc1 in com.mosesSupposes.fuse.ZigoEngine.tweenList)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.tweenList[_loc1].obj.__zigoEnabled == undefined)
            {
                com.mosesSupposes.fuse.ZigoEngine.tweenList.splice(Number(_loc1), 1);
            } // end if
        } // end of for...in
        if (com.mosesSupposes.fuse.ZigoEngine.tweenList.length == 0)
        {
            tweenList = [];
            com.mosesSupposes.fuse.ZigoEngine.deinit();
        } // end if
        for (var _loc1 in com.mosesSupposes.fuse.ZigoEngine.ints)
        {
            if (com.mosesSupposes.fuse.ZigoEngine.ints[_loc1] != undefined && com.mosesSupposes.fuse.ZigoEngine.ints[_loc1].obj.__zigoEnabled == undefined)
            {
                com.mosesSupposes.fuse.ZigoEngine.removeDelayedTween(Number(_loc1));
            } // end if
        } // end of for...in
    } // End of the function
    static function initShortcuts()
    {
        shortcuts = new Object();
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.tween = function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this].concat(arguments));
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.stopTween = function (props)
        {
            com.mosesSupposes.fuse.ZigoEngine.doEngineCall(this, "removeTween", props, true);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.isTweening = function (prop)
        {
            return (com.mosesSupposes.fuse.ZigoEngine.isTweening(this, prop));
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.getTweens = function ()
        {
            return (com.mosesSupposes.fuse.ZigoEngine.getTweens(this));
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.lockTween = function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.lockTween(this, true);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.unlockTween = function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.lockTween(this, false);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.isTweenLocked = function ()
        {
            return (com.mosesSupposes.fuse.ZigoEngine.isTweenLocked(this));
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.isTweenPaused = function (prop)
        {
            return (com.mosesSupposes.fuse.ZigoEngine.isTweenPaused(this, prop));
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.pauseTween = function (props)
        {
            com.mosesSupposes.fuse.ZigoEngine.doEngineCall(this, "pauseTween", props);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.unpauseTween = function (props)
        {
            com.mosesSupposes.fuse.ZigoEngine.doEngineCall(this, "unpauseTween", props);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.pauseAllTweens = function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.pauseTween();
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.unpauseAllTweens = function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.unpauseTween();
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.stopAllTweens = function ()
        {
            com.mosesSupposes.fuse.ZigoEngine.stopAll();
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.ffTween = function (props)
        {
            com.mosesSupposes.fuse.ZigoEngine.doEngineCall(this, "ffTween", props);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.rewTween = function (props)
        {
            com.mosesSupposes.fuse.ZigoEngine.doEngineCall(this, "rewTween", props);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.alphaTo = function (destAlpha, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_alpha"], [destAlpha], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.scaleTo = function (destScale, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_xscale", "_yscale"], [destScale, destScale], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.sizeTo = function (destSize, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_width", "_height"], [destSize, destSize], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.slideTo = function (destX, destY, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_x", "_y"], [destX, destY], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.rotateTo = function (destRotation, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_rotation"], [destRotation], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.brightnessTo = function (bright, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [com.mosesSupposes.fuse.ZigoEngine.getColorTransObj("brightness", bright)], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.brightOffsetTo = function (percent, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [com.mosesSupposes.fuse.ZigoEngine.getColorTransObj("brightOffset", percent)], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.contrastTo = function (percent, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [com.mosesSupposes.fuse.ZigoEngine.getColorTransObj("contrast", percent)], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.colorTo = function (rgb, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [com.mosesSupposes.fuse.ZigoEngine.getColorTransObj("tint", 100, rgb)], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.colorTransformTo = function (ra, rb, ga, gb, ba, bb, aa, ab, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [{ra: ra, rb: rb, ga: ga, gb: gb, ba: ba, bb: bb, aa: aa, ab: ab}], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.invertColorTo = function (percent, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [com.mosesSupposes.fuse.ZigoEngine.getColorTransObj("invertColor", percent)], seconds, animType, delay, callback, extra1, extra2]);
        };
        com.mosesSupposes.fuse.ZigoEngine.shortcuts.tintTo = function (rgb, percent, seconds, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, ["_ct_"], [com.mosesSupposes.fuse.ZigoEngine.getColorTransObj("tint", percent, rgb)], seconds, animType, delay, callback, extra1, extra2]);
        };
        mcshortcuts = new Object();
        com.mosesSupposes.fuse.ZigoEngine.mcshortcuts.getFrame = function ()
        {
            return (_currentframe);
        };
        com.mosesSupposes.fuse.ZigoEngine.mcshortcuts.setFrame = function (fr)
        {
            this.gotoAndStop(Math.round(fr));
        };
        com.mosesSupposes.fuse.ZigoEngine.mcshortcuts.frameTo = function (endframe, duration, animType, delay, callback, extra1, extra2)
        {
            com.mosesSupposes.fuse.ZigoEngine.doTween.apply(this, [this, "_frame", endframe != undefined ? (endframe) : (_totalframes), duration, animType, delay, callback, extra1, extra2]);
        };
    } // End of the function
    static function doEngineCall(obj, method, props, useArray)
    {
        var _loc2;
        if (props != undefined)
        {
            if (typeof(props) == "string")
            {
                if (props.indexOf(",") > -1)
                {
                    props = props.split(" ").join("").split(",");
                }
                else
                {
                    props = [props];
                } // end if
            } // end else if
            if (useArray == true)
            {
                _loc2 = props;
            }
            else
            {
                _loc2 = {};
                for (var _loc3 in props)
                {
                    _loc2[props[_loc3]] = true;
                } // end of for...in
            } // end else if
            com.mosesSupposes.fuse.ZigoEngine[method](obj, _loc2);
        } // end if
    } // End of the function
    static var VERSION = "1.0";
    static var AUTHOR = "Original version by Ladislav Zigo (http://laco.wz.cz/tween/), supported by Moses Gunesch (fuse@mosessupposes.com, http://www.mosessupposes.com/Fuse)";
    static var BROADCAST_EVENTS = false;
    static var AUTOSTOP = false;
    static var AUTOOVERWRITE = true;
    static var ROUND_RESULTS = false;
    static var inited = false;
    static var _th_depth = 6789;
    static var shortcuts = null;
    static var mcshortcuts = null;
    static var __oDetour = null;
    static var objTempID = 0;
} // End of Class
