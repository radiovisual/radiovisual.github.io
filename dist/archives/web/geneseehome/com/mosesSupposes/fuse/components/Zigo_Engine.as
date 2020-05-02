class com.mosesSupposes.fuse.components.Zigo_Engine extends MovieClip
{
    var extend_MovieClip, extend_TextField, add_easy_globals, gotoAndStop, hide_on_publish, _visible, url_btn, _parent, trace_version;
    function Zigo_Engine()
    {
        super();
        com.mosesSupposes.fuse.ZigoEngine.tweenHolder = this;
        if (extend_MovieClip == true)
        {
            com.mosesSupposes.fuse.ZigoEngine.initialize(MovieClip.prototype);
        } // end if
        if (extend_TextField == true)
        {
            com.mosesSupposes.fuse.ZigoEngine.initialize(TextField.prototype);
        }
        else if (extend_MovieClip == false)
        {
            com.mosesSupposes.fuse.ZigoEngine.initialize();
        } // end else if
        if (add_easy_globals == true)
        {
            _global.ZigoEngine = com.mosesSupposes.fuse.ZigoEngine;
        } // end if
        this.gotoAndStop(2);
        if (hide_on_publish == true)
        {
            _visible = false;
        }
        else
        {
            url_btn.onPress = function ()
            {
                _parent.getURL("http://www.mosessupposes.com/Fuse", "_blank");
            };
        } // end else if
        if (trace_version == true)
        {
            this.traceVersion();
        } // end if
    } // End of the function
    function traceVersion()
    {
        trace ("Running Zigo Engine version " + com.mosesSupposes.fuse.ZigoEngine.VERSION);
    } // End of the function
} // End of Class
