(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// library properties:
lib.properties = {
	width: 1920,
	height: 1080,
	fps: 60,
	color: "#000000",
	manifest: [
		{src:"images/Bitmap1.jpg", id:"Bitmap1"},
		{src:"images/Bitmap2.jpg", id:"Bitmap2"},
		{src:"images/Bitmap4.png", id:"Bitmap4"},
		{src:"images/Bitmap5.jpg", id:"Bitmap5"},
		{src:"images/speaker.png", id:"speaker"}
	]
};



// symbols:



(lib.Bitmap1 = function() {
	this.initialize(img.Bitmap1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,356,652);


(lib.Bitmap2 = function() {
	this.initialize(img.Bitmap2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,5000,3750);


(lib.Bitmap4 = function() {
	this.initialize(img.Bitmap4);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,776,579);


(lib.Bitmap5 = function() {
	this.initialize(img.Bitmap5);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,335,554);


(lib.speaker = function() {
	this.initialize(img.speaker);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,335,554);


(lib.Tween3 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.speaker();
	this.instance.setTransform(-60.1,-99.5,0.359,0.359);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-60.1,-99.5,120.4,199);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.speaker();
	this.instance.setTransform(-63.3,-101.5,0.378,0.366);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-63.3,-101.5,126.7,203);


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.speaker();
	this.instance.setTransform(-60.1,-99.5,0.359,0.359);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-60.1,-99.5,120.4,199);


(lib.rightarm = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("Ah6m1IDJDBIgmBLIhFCrIh4EAIgYAAIAAAmIg6AAIiOB2IAUA+IAAAmIBYA3IAHAhIAvAaIAkgcIAagyIBKhMIBvi2ICujYIBMhzIAAgjIBWiwQg6jkjsiVg");
	this.shape.setTransform(0,62.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFCC99").s().p("AkBJaIgHgiIhXg2IAAgmIgUg+ICNh2IA7AAIAAgnIAXAAIB5j/IBEiqIAmhNIjJjAIDJi+QDsCVA5DkIhVCvIAAAkIhNByIiuDYIhtC2IhLBNIgZAxIgkAdg");
	this.shape_1.setTransform(0,62.8);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-38.3,-1,76.6,127.6);


(lib.pants = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("AAmqnIBIAsIAUC6IAoCEIAADmIAiBcIgyAuIAAC0IAeAmIg2DIIAADKIgcB8IAAEIIAqCEIBGgeIDQAAIA6iCIg2g2IAAgwIAwhAIAWigIA0hOIgghuIAAheIAug+IAApqIA2iWIAAh+IAeiGIAkhuIAogyIAAhsIAghgIAAhGIgYgmIAZhdIo9ARIi6AFIAGCaIAbEXIBRhIIAvjPIAZifAgEy6InMANIhGCOIhYEoIAABOIgmAoIgoC2IAADoIgiCqIAABqIAaAeIgcCOIAmCSIAADEIgUCUIBODMIg4AAIg6AkIAAAiIA6A2IAAA6IgeA4IDGAaIAoA2IAiAAICci2IAAkSIgghWIAWhOIAAj0IAkiEIgUh+IAqhGIAAg8IAuhwIAYh8IBAiaIBUiGIBGiIAAdsJIAJBi");
	this.shape.setTransform(75.5,123.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#375C86").s().p("AnoTRIgog2IjGgaIAeg4IAAg6Ig6g2IAAgiIA6gkIA4AAIhOjMIAUiUIAAjEIgmiSIAciOIgageIAAhqIAiiqIAAjoIAoi2IAmgoIAAhOIBYkoIBGiOIHMgNIAGCaIAbEXIgbkXIgGiaIC6gFII9gRIgZBdIAYAmIAABGIggBgIAABsIgoAyIgkBuIgeCGIAAB+Ig2CWIAAJqIguA+IAABeIAgBuIg0BOIgWCgIgwBAIAAAwIA2A2Ig6CCIjQAAIhGAeIgqiEIAAkIIAch8IAAjKIA2jIIgegmIAAi0IAyguIgihcIAAjmIgoiEIgUi6IhIgsIgJhiIBRhIIAvjPIAZifIgZCfIgvDPIhRBIIAJBiIhGCIIhUCGIhACaIgYB8IguBwIAAA8IgqBGIAUB+IgkCEIAAD0IgWBOIAgBWIAAESIicC2gAAmqng");
	this.shape_1.setTransform(75.5,123.3);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1,-1,153.1,248.7);


(lib.leftarm = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("AhXqmIiACsIg4BsIhGDiIAABaIBMCyIFFH5IAYAZIAcA1IC+AAIAAg6IAogjIAAhbIgag+Ig8gcIgaAXIg6AAIhChsIhMikIAAgmIg7jKIgUgeIAAgwIgagaIC6j0IAxi0g");
	this.shape.setTransform(0,67.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFCC99").s().p("ABvKnIgcg1IgXgaIlFn4IhMiyIAAhaIBHjiIA3hsICAisID3BCIgxC0Ii5D0IAZAaIAAAxIAVAdIA5DLIAAAmIBNCjIBBBsIA7AAIAZgYIA8AdIAbA9IAABdIgoAhIAAA7g");
	this.shape_1.setTransform(0,67.9);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-35.2,-1,70.4,137.8);


(lib.face = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#4B372F").ss(0.1,1,1).p("AgYgVIAxAAIgJAPIAAAFIgOASQgCAFAAAAIgJgIIAAgOIgGAAIAAgEIgJgFg");
	this.shape.setTransform(27.9,78.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(1,1,1).p("ACBiXQAAAHgFAEQgEAFgHAAQgIAAgFgFQgEgEAAgHQAAgIAEgFQAEgCAEgBQACgBADAAQAGAAAEAEQABAAAAAAQAFAFAAAIgAhUihQAAAHgFAEQgFAFgHAAQgGAAgFgFQgFgEAAgHQAAgIAFgFQADgCADgBQADgBACAAQAHAAAEAEQABAAAAAAQAFAFAAAIgAjyAbQBZA3AyBhQgTgvATg3QBSg9ByA9QAKAxgKApIAlhBIA/gMIAsg7IACgCIAEgF");
	this.shape_1.setTransform(29.5,61.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(1,1,1).p("ADnA9IAKAGIAPgPIARAAIAghUIAAhcIAPgnIiEj2IjJg0IgOAMIglgNIjGDIIAAAdIgbALIgOA1IAAAyIgQAMIAZAdIgKBVIAOAAIAAAqIANAAIAJAAIBJi5IAAhSQCfhoDEBaIAjA4IAAB8IAaBOIAAAdIAGADgAjMgdQAqgvBPAXAi+gEQAoglA8AUAgDCSIgBAAIgEAGIAFAAIADAAQAAABAAABQAAgBAAgBIAAAAQABAAACAAQABgBABgCQgCgDgDACIAAgBIAAgBIgBAAIgBADQAAAAAAAAIAAABQAAAAABABQABAAAAABQAAAAAAAAQAAgCAAgCQAAgBgCACIAAABIgBACIACgBIABgDIAAAAAAACTQAAAAgBgBQgBAAgBAAAAACUQAAABAAADAADCYQAAgDgDgBAAACSIgDAAAgCCVQgBABAAACAgECSQABACABABAg7CMIgEAAIAAAJIAKAAIAAgEAg7CMQgBACAAAAQACACABABQADAAABAAIAAgFQgDgCgDAAQAAABAAABgAg1CMIgGAAAANBrQA6Apg6AbAhHBqQgtALAnAsAkaA7IALBfIADAcIAAAHIAABiIBABvIBAA2QBUAXBTgXIB8hBIBDhzIgBheIAJhQIABgHIAEgeAhZEQQA+ATAtgeAA9gPQA5gTASAkAAYgkQBcgtApA9");
	this.shape_2.setTransform(32.1,46.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#FFCC99").ss(0.1,1,1).p("AAGguIABACIAAABIgBAHIgMBT");
	this.shape_3.setTransform(54.2,60);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#4B372F").s().p("ABEBMIABgMIAAgDQgGAFgMABIgnAEQghAFgLAAQgQAAgLgJIgBABIgCAAIgJgOIgGgKQgJgOAAgNIABgEQgGgNAAgnIADgQQACgOACgEQABAAAAAAQABAAAAABQAAAAAAAAQAAABAAAAIADgEIABgBQABAAAAAAQABAAAAAAQABAAAAABQAAAAAAAAIgBADIAJgDQAFgEADAAIAGgCIAHgBIAAABIgJAEIAAACIAAACIAFgCQAVgJAJgBIAYAAIA/AHQAJACADAEQACgCAFAAIABADIAEABIABACIgBACIgDAAIABABIABAIIgCAWIACASIgEAOIABADQAAAFgDANIgCAYIgCAWQgDANgGAJQgDgEAAgGgAhIg/IgBAKIABAGQABAHgDAEQgCA1ANAlQBBAVBDgTQANg2gLhBQglgOgiAAQgkAAgkAOgABRAHIABAAIAAAAIgBAAgABSgYIABABIgBgGIAAAAgABUg8IAAAKIABABQABgGgBgGgAgPAVIAAgOIgHAAIAAgFIgJgEIAAgMIAyAAIgJAOIAAAEIgNAVIgCAFg");
	this.shape_4.setTransform(28.5,77.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#000000").s().p("ABfAQQgFgFAAgGQAAgFAFgGQADgDAEAAIAFgBQAGAAAEADIACABQAEAGAAAFQAAAGgEAFQgFAFgHAAQgHAAgFgFgAh2AGQgFgFABgEQgBgHAFgGQADgDAEAAIAFgBQAGAAAFADIABABQAEAGAAAHQAAAEgEAFQgFAFgHAAQgHAAgFgFg");
	this.shape_5.setTransform(30,46);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#4C372F").s().p("AiMHDIhAg2IhAhuIAAhiIAAgHQBZA2AyBhQgTguATg3QBSg9BxA8QALAygLAoIAmhBIA+gMIAtg6IACgDIAEgFIABBdIhDBzIh8BBQgpAMgqAAQgqAAgqgMgAAiF4IgBALQAAAHACADQAHgIACgNIACgXIADgXQADgOAAgHIgBgDIADgNIgCgSIACgXIgBgIIgBgBIADAAIABgBIgBgCIgEgBIgBgEQgEAAgDADQgDgFgIgBIg9gIIgaAAQgKABgVAJIgFACIABgCIAAgBIAJgFIgBgBIgHACIgGACQgCAAgGADIgIADIAAgDQAAAAAAAAQAAAAAAAAQgBAAAAAAQgBgBgBABIgBAAIgCAFQAAgBAAAAQgBgBAAAAQAAAAAAAAQgBAAAAgBQgDAEgCAOIgCAQQAAApAFANIAAAFQAAANAIANIAGALIAJANIACAAIABgBQALAKAQgBQALAAAjgEIAmgFQALgBAGgFgAAtE/IAAgBIABAAIAAABgAAuEeIAAgGIAAAAIABAHgAAxEEIAAgKIAAgBQABAGgBAFgADnA9IgEgDIgGgEIAAgcIgahOIAAh8Igjg4QjEhaifBoIAABSIhJC4IgJAAIgNAAIAAgpIgOAAIAKhWIgZgcIAQgMIAAgyIAOg1IAbgLIAAgdIDGjIIAlANIAOgMIDJAzICED3IgPAnIAABcIggBUIgRAAIgPAPg");
	this.shape_6.setTransform(32.1,46.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFCC99").s().p("AhJE7QgNglACg3QADgFgBgGIgBgGIABgKQBIgdBGAdQAMBDgNA2QgfAJgdAAQgkAAgkgLgAgpEBIAJAGIAAAFIAGAAIAAAOIAKAJIADgFIANgVIAAgFIAIgPIgxAAgAgRDkQAfAAAcgRIAAAAIABgBIgBABIAAAAQgcARgfAAIgBAAIAAAAQgUAAgXgGIgBgBIAAAAIgCAAIACAAIAAAAIABABQAXAGAUAAIAAAAIABAAgAjzCDIgDgcIADAcIAAAHIgDgjQgEg1gBgyIAJAAIBIi7IAAhSQCfhnDFBZIAjA4IAAB8IAaBQIAAAbIAFADIAAAfIgPBhIgtA7Ig/ALIglBBQAKgogKgyQhyg8hSA9QgTA3ATAvQgxhihag2gAAmB8QAdgNAAgRQAAgRgdgVQAdAVAAARQAAARgdANgAg0BuQgRgUAAgOQAAgPAYgGQgYAGAAAPQAAAOARAUgAAYBnIABgCIABAAIACAAIADgDIAAAAIgBgBIAAAAIgCgBIAAAAIAAAAIgCABIgBgBIgCgBIgDAAIADAAIgBADIgBAAIgBgDIAAAAIAAAAIgEAGIAEAAIAEAAIAAACIAAAAgAgmBiIALAAIAAgEIAAgFIgGgCIgBACIABgCIAGACIgHAAIAHAAIAAAFIgFAAIgDgDIABgCIgEAAIAAAJgABrg/QgEAAgDADQgFAFAAAHQAAAHAFAFQAFAFAHAAQAHAAAEgFQAFgFAAgHQAAgHgFgFIgBgBQgEgDgGAAIgFABgAhqhJQgEAAgDADQgFAFAAAHQAAAHAFAFQAFAFAHAAQAHAAAEgFQAFgFAAgHQAAgHgFgFIgBgBQgEgDgGAAIgFABgACigvIAAgBIgBAAIAAgCIgBAAQgMgWgbgBIAAAAIgBAAQgNABgRAFIAAAAIgBAAIgCABIgBAAIABAAIACgBIABAAIAAAAQARgFANgBIABAAIAAAAQAbABAMAWIABAAIAAACIABAAIAAABIAAAAgAilg3IABgBIABgBQAZgWAhAAIABAAIAAAAQASAAAVAHQgVgHgSAAIAAAAIgBAAQghAAgZAWIgBABIgBABgAC2hHIgBgDIAAAAIAAAAIgBAAQgXgggnAAIAAAAIAAAAQgcAAgjAQIAAAAIgCABIgEACIAEgCIACgBIAAAAQAjgQAcAAIAAAAIAAAAQAnAAAXAgIABAAIAAAAIAAAAIABADIAAAAgAizhQIACgCQAbgeAtAAIAAAAIAAAAQAUAAAXAGIACABIAAAAIAAAAIABAAIACABIgCgBIgBAAIAAAAIAAAAIgCgBQgXgGgUAAIAAAAIAAAAQgtAAgbAeIgCACgAh+izIADAAIgBAAgAAXi/IABAAIABAAIgBAAgAAYBlIABAAIgBACIAAgCgAAQBlIAEgGIABADIgBADgAAUBlIAAAAgAAUBlIABgCIABABIgCABIAAAAgAAVBiIAAABIgBACIABgDgAAWBkIACABIgEAAgAAcBlQAAgBAAgBQAAAAAAgBQgBAAAAgBQgBAAAAAAIACgBIAAAAIAAAAIACABIAAAAIABABIAAAAIgDADIAAAAgAAaBlIgBAAIABgEQAAAAABAAQAAABABAAQAAABAAAAQAAABAAABIgCAAgAAYBlIABgEIABAAIgBAEIgBAAgAAYBlIAAAAgAAYBlIAAAAgAAYBlIgCgBIADgDIgBAEIAAAAgAAWBkIAAAAgAAWBkIgBgBIABgBIAAgBIAAAAIACgBIABAAIABABIgBAAIgDADIAAAAgAAVBjIAAgBIABAAIgBABIAAAAgAAVBiIAAAAgAAXBfIAAAAIACABIgCgBIACABIABABIgBgBIgBAAIgCABIAAAAIAAABgAgmBiIAAgJIAEAAIgBACIADADIAFAAIAAAEgAAaBhIAAAAgAAaBhgAAaBhIAAAAgAAZBhIAAAAgAAUBfIADAAIAAAAIgDAAgAAUBfgAAUBfgAgbBZg");
	this.shape_7.setTransform(29.5,51.4);

	this.addChild(this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1,-1,66.2,94.7);


(lib.speaker_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("AoUwiIAAAiIAAfAQAABZhQAKAJVv/IABAEIgIgFIgVgMIAHAJIgFgBQgBgBAAAAIAAAAIAFAFIAMANIADACIAEAEIAAABIAAAAIAAAAIADAAIABAFIAHAHQgLgSgRgOQgDgCgDgCIgBgBIgGgCIAAAEIAHADIAHAHIAJAGIAHAHIAAAAIAEAFIAIAVIgRgaIgIgHIgWgNIgRgKIAOAKIAVAQIABAAIAbAmIAAACIAIATAJgvdQgBgCAAgBQgFgLgHgKQgDgEgDgHAJVwBIAAABIAAABIAQAZIAAgGIgPgUIgBgBIgGgJIAGAKIAAABAJlv0QgBgGgCgGQgEgKgJgKIAIAUIAIAUIgLgUIgHgNIACAMAJdvgIADADIAFAFAJevSIABABIAAACIAGASAJlvSQgEgHgEgHAJlvTQgDgFgCgFAJlvmIAAAGAJlvJIgHgJ");
	this.shape.setTransform(-6.4,113.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("EAImAg0QhlAAAAhkIAA/WIAAgIIAAgMIAAgJIAAAAIAAgGIAAgHIAAgHIAAgGIAAgIIAAgLIgDAAQgDgLgJgKIAIAVIgEAAIgHgNIADALIgDgLIAHANIgDAAIgBgCIgHgJIAHALIgHAAIgVgNIAGAKIgEgCIAEACIgGgKIAVANIgBAAIgMAAIgGgFIAGAFIgCAAIgFgGIABABIgBgBIAAAAIgGgCIAAAFIAHADIgMAAIgRgKIANAKIw/AAIAAgjIAAAjIAAe/QAABZhQAKIAA9OQAAAQgLALQgMAMgQAAQgRAAgMgMQgMgMAAgQIAAhoQAAgRAMgKQAMgLARAAQAQAAAMALQALAKAAAQIAAiNQgkgCgbgbQgcgdgBgoQABgoAcgdQAdgdApAAITsAAQAXgMAjAAIDaAAQBjAAABBkIAAa2QgBBkhjAAIjaAAQgWAAgRgEIAADsIAsAAIAAERgAG6hQIgIgVQAJAKADALgAGyhQIAAgCIABACgAGyhQIgHgLIAHAJIAAACgAGYhQIgHgDIAAgFIAGACIAFAGgAGIhQIgNgKIARAKgAGXhWIAAAAIABABgAGXhWgArT/rQgPAAgKgKQgLgLAAgPQAAgPALgKQAKgLAPAAIAcAAQAQAAAKALQAKAKAAAPQAAAPgKALQgKAKgQAAg");
	this.shape_1.setTransform(9.9,19);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(1,1,1).p("AJVvsIABAEIgIgFIgVgMIAHAJIgFgBQgBgBAAAAIAAAAIgGgCIAAAEIAHADIAHAGIAJAHIADACIAEAEIAAABIAAAAIAAAAIADAAIABAFIAIAVIgRgaIgIgHIgWgNIgRgKIAOAKIAVAQIABAAIAbAmIAAACIAIATAJdvNQgLgSgRgOQgDgCgDgCIgBgBIAFAFIAMANIAHAHIAAAAIAEAFIAHAHIADADQgBgCAAgBQgFgLgHgKQgDgEgDgHAJlvZIgPgUIgBgBIAAABIAAABIAQAZgAJVvuIgGgJIAGAKIAAABAJlvhQgBgGgCgGQgEgKgJgKIAIAUIAIAUIgLgUIgHgNIACAMAJeu/IABABIAAACIAGASAJlvTIAAAGAJlu/QgEgHgEgHAJgvKIAFAFAJlvAQgDgFgCgFAJlu2IgHgJAoUw1IAABIIAAfAQAABZhQAK");
	this.shape_2.setTransform(-6.4,111.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#000000").s().p("EAIgAg0QhlAAAAhkIAA/WIAAgIIAAgMIAAgJIAAAAIAAgGIAAgHIAAgHIAAgGIAAgIIAAgLIgDAAQgDgLgJgKIAIAVIgEAAIgHgNIADALIgDgLIAHANIgDAAIgBgCIAAACIAAAAIgHgLIAHAJIgHgJIAHALIgHAAIgVgNIAGAKIgEgCIAEACIgGgKIAVANIgBAAIgMAAIgGgFIAGAFIgCAAIgFgGIABABIgBgBIAAAAIgGgCIAAAFIAHADIgMAAIgRgKIANAKIw/AAIAAhJIAABJIAAe/QAABZhQAKIAA9OQAAAQgLALQgMAMgQAAQgRAAgMgMQgMgMAAgQIAAhoQAAgRAMgKQAMgLARAAQAQAAAMALQALAKAAAQIAAi3QgXgGgUgTQgdgdAAgqIAAgqQAAgpAdgeQAegdApAAISWAAQApAAAdAdQAUAUAGAZQAMgCAPAAIDaAAQBjAAABBkIAAa2QgBBkhjAAIjaAAQgWAAgRgEIAADsIAsAAIAAERgAG0hQIgIgVQAJAKADALgAGshQIAAgCIABACgAGShQIgHgDIAAgFIAGACIAFAGgAGChQIgNgKIARAKgAGRhWIAAAAIABABgAGRhWgArZ/rQgPAAgKgKQgLgLAAgPQAAgPALgKQAKgLAPAAIAcAAQAQAAAKALQAKAKAAAPQAAAPgKALQgKAKgQAAg");
	this.shape_3.setTransform(10.5,19);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_3},{t:this.shape_2}]},9).wait(11));

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.setTransform(0,99.5);

	this.instance_1 = new lib.Tween2("synched",0);
	this.instance_1.setTransform(0,99.5);
	this.instance_1._off = true;

	this.instance_2 = new lib.Tween3("synched",0);
	this.instance_2.setTransform(0,99.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},9).to({state:[{t:this.instance_2}]},10).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true},9).wait(11));
	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({_off:false},9).to({_off:true},10).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-76.9,-191,173.6,420.1);


(lib.shirt = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("AJVrFIA3A3IBzBnIBLBNIBsBnIBVBrIhQAyIjXCqIghgqIgygjIhpAbAEotMIEKCHIAjAAIAADDIgqCMIgDEYIggAjIhdCaIA1AvIAACRIAeArIAABaIAZAvIAABuIAZAmIgZAAIAAAgIAbAhIAABfIArCRIAAAoQkpCdlOAUQghtbBeufIBMhlIgjgRQA1gJA/g5QgYA4g5AbABZxwQAjAHAfAUIAXBXQAqAYARAMQAyBLAJBDQANBihIBSIh+hWABMr/IgigRIg6BTQgJBMgHBMQgIADgTieIAAggIgMgrIA3gRIAABfACyv+QAiBGgEAuACyv+IAeB0QgDApgNAgAC/kvIAAB1ICxAAIAAh3IhdAWIhdgbIAAhFIDEAAIAABHIgKADAi5waQA5goAzgWAkxuiQANgiAVgkQAQgaBGgYAh9r6IA2gRAi6roIA9gSAi6roIhiBOQhOh5A5iPImeB+IAABEIAjAyIAeBwIAeBTIgoFWIhfA/IgbhnIhng0IhzhEIgegjIBziMIBEilIAjggIBhh7Ai6roQg2gzgFgzQgDgYAJgYQAahLAchRAj1tOQAeA+BaAWAnskkIAAB2ICwAAIAAh4IhdAWIhdgbIAAhFIDFAAIAABHIgLADAqYiVIAAA1IAmBSIAACpIAeBLIACIAQgJCIg1BtQDMCaFagGIBQACAggolQhdOTATMB");
	this.shape.setTransform(0,113.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AjagyQAeA8BaAWIg9ATQg2gzgFgygABnAcQA1gKA/g3QgYA3g5Abg");
	this.shape_1.setTransform(-2.7,34.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFCC99").s().p("AABB6Ig0ARIg3ARQhagWgeg+QgDgYAJgYIA3iaQA4gnA0gXQABAGAIAFIAGADQACACAEABIAGAAIAOABIAjAAIAhgEQAHgCACgEIACgBQAbgGAKgGQAEgBACgCQACgDAAgNQAjAIAfAUIAXBWIAeByQgDApgNAgQg/A5g1AKIgigRIg8BSg");
	this.shape_2.setTransform(-1.9,21.8);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#636A7A").s().p("AhqREQgDiCAAiFQAAqUBNr4QhNL4AAKUQAACFADCCQlaAFjMiZQA1htAKiIIgDoBIgehLIAAioIgmhSIAAg1IheA/IgchmIhng1IhzhEIgegiIB0iNIBDikIAjghIBhh7IAABEIAkAyIAdBwIAfBTIgpFWIAplWIgfhTIgdhwIgkgyIAAhEIGeh+QANgiAWgkQAPgaBGgYIg2CcQgJAYADAYQAFAzA2AzIA9gSIA2gRIAMArIAAAhIABAEIAAAAIABAFIAAAAIABALIABAHIABAMIAAABIABAFIAAACIABAFIAAADIABAIIAAABIABAGIABAEQAKBNAGADIABABIAAAAIAAAAIAAAAIAAAAIAAAAIAAAAIgBgBQgGgDgKhNIgBgEIgBgGIAAgBIgBgIIAAgDIgBgFIAAgCIgBgFIAAgBIgBgMIgBgHIgBgLIAAAAIgBgFIAAAAIgBgEIAAghIgMgrIA3gRIAABfIA6hSIAiARIAiAQIhLBmQhFKzAAKNQAADfAIDagAk7jaIAAh3IheAXIhdgbIAAhFIDFAAIAABHIgKACIAKgCIAAhHIjFAAIAABFIBdAbIBegXIAAB3IixAAIAAh1IAAB1ICxAAgAggpPIAQiZIgQCZgAkcrFIBihOIhiBOQgthGAAhNQAAg4AYg9QgYA9AAA4QAABNAtBGgAgiKNQAAqNBFqzIBLhmIB/BWQA9hFAAhRQAAgPgCgPIEKCHIAjAAIAADEIgqCLIgDEYIggAjIhdCZIA0AwIAACRIAfArIAABaIAYAvIAABuIAZAlIgZAAIAAAhIAcAgIAABgIAqCQIAAApQkoCdlOAUQgIjaAAjfgAC/jlICxAAIAAh3IAKgDIAAhHIjFAAIAABFIBeAbIBdgWIAAB3IixAAIAAh1IAAB1gAhqREIAAAAgALDiBIgygjIhpAbIADkYIAqiLIAAjEIA3A3IBzBnIBLBNIBsBnIBVBrIhRAyIjXCrgAC1lhIAAhFIDFAAIAABHIgKADIhdAWgAFwlcgABusZQA6gbAXg4QAOggADgpQADgughhGQAqAYARAMQAyBLAJBDQACAPAAAPQAABRg9BFgAJVrwgABusZg");
	this.shape_3.setTransform(0,118.1);

	// Layer 2
	this.instance = new lib.leftarm();
	this.instance.setTransform(-87.9,145.6,1,1,0,0,0,0,67.9);

	this.instance_1 = new lib.rightarm();
	this.instance_1.setTransform(86.4,146.7,1,1,0,0,0,0,62.8);

	this.addChild(this.instance_1,this.instance,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-122.6,-1,246.8,229.5);


// stage content:



(lib.HubskiDance = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 21
	this.text = new cjs.Text("September 16th, 2014", "21px 'PT Sans'", "#333333");
	this.text.textAlign = "center";
	this.text.lineHeight = 23;
	this.text.lineWidth = 279;
	this.text.setTransform(958,972.8);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AQlBpQgXgJgRgPQgRgPgJgVQgKgUAAgYQAAgVAJgVQAJgVARgQQAQgQAWgKQAXgJAbAAQASAAAOAFQAPAEAMAJQANAHAJAKIAQAVIgQALQgOgagRgNQgQgMgWAAQgUAAgRAHQgRAHgMANQgMANgHASQgHATAAAVQAAAYAIASQAHASANANQANAOARAGQARAIAUgBQAPAAALgDQAMgEAJgIIAAhMIgpAAIAAgMIBOAAIAABfIgUAJIgVAHIgYAEIgfABQgbAAgXgJgAGXBsQgSgHgMgLQgMgMgGgOQgGgPAAgSIAAiLIAlAAIAACMQAAAOAFAMQAFANAJAJQAJAJAMAFQANAGAPAAQAQAAANgGQAMgFAJgJQAJgJAFgNQAEgMAAgOIAAiMIAQAAIAACMQAAARgFAPQgGAPgLALQgMALgSAHQgSAGgZAAQgXAAgRgGgAykByIibiwIgCAAIAACrIgQAAIAAjZIAUAAICQCeIABAAIAAieIARAAIAADegADqBvIg2iHIg0CHIgMAAIhXjbIAlAAIBBCkIA6iUIA7CVIBAilIASAAIhVDbgAbnBtIhMhnIgaAAIAABnIglAAIAAjZIBMAAQAUAAAPAEQAOAEAKAIQAKAHAFALQAFALAAAMQAAAKgDAJQgEAJgHAIQgHAGgKAFQgKAEgMADIBQBqgAaBgDIAVAAQANAAAKgDQALgEAHgFQAIgHAEgIQAFgJAAgLQAAgKgEgIQgDgIgGgFQgGgHgJgDQgJgDgKgBIggAAgAWbBtIAAjZICYAAIAAAOIhzAAIAABPIBNAAIAAANIhNAAIAABhIBzAAIAAAOgATqBtIAAjZIAkAAIAADLIBvAAIAAAOgAOdBtIhMhnIgaAAIAABnIglAAIAAjZIBMAAQAUAAAPAEQAOAEAKAIQAKAHAFALQAFALAAAMQAAAKgDAJQgEAJgHAIQgHAGgKAFQgKAEgMADIBQBqgAM3gDIAVAAQANAAAKgDQALgEAHgFQAIgHAEgIQAFgJAAgLQAAgKgEgIQgDgIgGgFQgGgHgJgDQgJgDgKgBIggAAgAJRBtIAAjZICYAAIAAAOIhzAAIAABPIBNAAIAAANIhNAAIAABhIBzAAIAAAOgAjlBtIAAjZICYAAIAAAOIhzAAIAABPIBNAAIAAANIhNAAIAABhIBzAAIAAAOgAmmBtIAAjZICYAAIAAAOIhzAAIAABPIBNAAIAAANIhNAAIAABhIBzAAIAAAOgApXBtIAAjZIAkAAIAADLIBvAAIAAAOgAr5BtIgihJIheAAIgiBJIgTAAIBqjeIAJAAIBnDegAshAWIgohVIgpBVIBRAAgAwoBtIAAhbIhYh+IAmAAIBMBtIBMhtIAUAAIhVB6IAABfgA2TBtIghhJIheAAIgjBJIgSAAIBpjeIAKAAIBnDegA27AWIgohVIgpBVIBRAAgA7CBtIAAjLIhPAAIAAgOIDDAAIAAAOIhPAAIAADLgArLAoIAAgUIBQAAIAAAUg");
	this.shape.setTransform(960.3,243.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.text}]}).wait(63));

	// Layer 20
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#9966CC").s().p("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");
	this.shape_1.setTransform(964.5,145.1);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(63));

	// face
	this.instance = new lib.face();
	this.instance.setTransform(995.3,440.9,1,1,0,0,0,32,46.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:450},10).to({y:443.5},9).to({x:996,y:449.3},6).to({y:453.2},14).to({x:992.1},7).to({x:992.7,y:455.2},6).to({x:993.4,y:442.2},10).wait(1));

	// shirt
	this.instance_1 = new lib.shirt();
	this.instance_1.setTransform(990.9,468.7);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:-7.5,x:994.9,y:478.3},10).to({rotation:-4.2,x:990.9,y:471.9},9).to({rotation:-7.2,x:992.5,y:476.7},6).to({rotation:11.1,x:988.5,y:482.3},14).to({rotation:8.3,y:478.3},7).to({rotation:12,x:990.1,y:485.5},6).to({rotation:0,x:990.9,y:468.7},10).wait(1));

	// pants
	this.instance_2 = new lib.pants();
	this.instance_2.setTransform(970.1,957.3,1,1,0,0,0,69.8,278.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({scaleY:1.01,skewX:6.3},10).to({scaleY:1,skewX:2.9},9).to({scaleY:1,skewX:5.6},6).to({scaleY:1.01,skewX:-9.1},14).to({scaleY:1.01,skewX:-7.4},7).to({scaleY:1.01,skewX:-9.7},6).to({scaleY:1,skewX:0},10).wait(1));

	// shoes
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#000000").ss(1,1,1).p("AFKAgIA0BsIAABkQCEA3Cwg3IAAjMIiEkuIjkAcIgsDAIAsAAgAickBIAADMIheAmIBejyIlEBKIicDQIg0BUIA8CEIC4AAICEhkIA+ic");
	this.shape_2.setTransform(957.9,930.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#00202C").s().p("AF9DwIAAhkIg0hsIAAhOIgrAAIArjAIDlgcICDEuIAADMQhYAbhNAAQhNAAhCgbgAp0DxIg9iEIA1hUICbjQIFEhKIhdDyIBdjyIAADMIhdAmIg+CcIiFBkg");
	this.shape_3.setTransform(957.9,930.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#000000").ss(1,1,1).p("AFKAgIA0BsIAABkQCEA3Cwg3IAAjMIiEkuIjkAcIgsDAIAsAAgAj6gPIBejyIAADMgAickBIlEBKIicDQIg0BUIA8CEIC4AAICEhkIA+ic");
	this.shape_4.setTransform(957.9,930.4);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#00202C").s().p("AF9DwIAAhkIg0hsIAAhOIgrAAIArjAIDlgcICDEuIAADMQhYAbhNAAQhNAAhCgbgAp0DxIg9iEIA1hUICbjQIFEhKIhdDyIg+CcIiFBkgAidkBIAADMIhdAmgAidkBg");
	this.shape_5.setTransform(957.9,930.4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2}]}).to({state:[{t:this.shape_5},{t:this.shape_4}]},62).wait(1));

	// 30
	this.text_1 = new cjs.Text("30", "bold 900px 'Snell Roundhand'", "#333333");
	this.text_1.textAlign = "center";
	this.text_1.lineHeight = 902;
	this.text_1.lineWidth = 1194;
	this.text_1.setTransform(958,-139.4);

	this.timeline.addTween(cjs.Tween.get(this.text_1).wait(63));

	// Layer 19
	this.instance_3 = new lib.speaker_1();
	this.instance_3.setTransform(1325.8,655,1,1,0,0,0,0,99.5);

	this.instance_4 = new lib.speaker_1();
	this.instance_4.setTransform(1325.8,843.3,1,1,0,0,0,0,99.5);

	this.instance_5 = new lib.speaker_1();
	this.instance_5.setTransform(673.4,659.5,1,1,0,0,0,0,99.5);

	this.instance_6 = new lib.speaker_1();
	this.instance_6.setTransform(673.4,847.8,1,1,0,0,0,0,99.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_6},{t:this.instance_5},{t:this.instance_4},{t:this.instance_3}]}).wait(63));

	// stage
	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(1,1,1).p("EhCugJyIAAhcMCFdAAAIAABcEBCvABvIAAJgMiFdAAAIAApg");
	this.shape_6.setTransform(981.2,967.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#333333").s().p("EhCuAAyIAAhiMCFcAAAIAABig");
	this.shape_7.setTransform(981.2,934.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_7},{t:this.shape_6}]}).wait(63));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(1321.1,400.6,1198,2275.8);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;