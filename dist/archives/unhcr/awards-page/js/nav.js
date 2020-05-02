
// find the closest nav item
o = $;
o(function(){
  var prev;
  var n = 0;

  var headings = o('.section').map(function(i, el){
    return {
      top: (o(el).offset().top) - 150, // 150 = offset for fixed navigation
      id: el.id
    }
  });

  function closest() {
    var h;
    var top = o(window).scrollTop();
    var i = headings.length;
    while (i--) {
      h = headings[i];
      if (top >= h.top) return h;
    }
  }

  o(document).scroll(function(){
    var h = closest();
    if (!h) return;

    if (prev) {
      prev.removeClass('closest');
      //prev.parent().parent().removeClass('closest');
    }

    var a = o('a[href="#' + h.id + '"]');
    a.addClass('closest');
    //a.parent().parent().addClass('closest');

    prev = a;
	
  })
})




