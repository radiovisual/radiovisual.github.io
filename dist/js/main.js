var types = {
	WEB_APP: 'web application development',
	WEB: 'web development',
	MODULE: 'module development',
	FULL_STACK: 'full stack web development',
	APP: 'application development',
	IOS: 'iOS development',
	DESIGN: 'design',
	NODE: 'node development',
	VIDEO: 'video / animation',
	ANIMATION: 'animation',
	INTERACTIVE_WEB: 'interactive web development',
	THREED_DESIGN: '3D design'
};

var colors = {
		RED: '#d5172f',
		YELLOW: '#d5d317',
		BLUE: '#04c2ce',
		GRAY: '#8e8b8c'
};

var who_am_i = [
	'Web & Interface Designer',
	'Open Source Enthusiast',
	'iOS Developer',
	'Husband & Father',
	'Wannbe Pro Snowboader',
	'Ninja Warrior',
	'Superhero',
	'Former Rock Guitarist',
	'Full-Stack JavaScript Developer'
];

var projects = [
	{
		title: 'Immunity',
		type: types.WEB_APP,
		img: 'dist/img/thumbs/0007_immunity-website.png',
		description: 'I designed and developed this website for Immunity, Inc to showcase their many products. The site is built on top of the Metalsmith static site generator for rapid development and deployment. It features a live stream of filtered tweets, realtime blog updates and YouTube postings.',
		techs: 'Metalsmith, Node.js, HTML/CSS, Gulp, SASS, Photoshop',
		url: 'http://immunityinc.com'
	},
	{
		title: 'Birdwatch',
		type: types.MODULE,
		img: 'dist/img/thumbs/0019_birdwatch.png',
		description: 'Birdwatch helps you fetch, filter, sort, cache and serve specific tweets from specific twitter accounts, thus avoiding any request limits set by the Twitter API, and giving you more control over the data that is served to your applications or websites. Use the built-in server to get you up and running quickly, or switch the server off and use the cache file anyway you like.',
		techs: 'Node.js, AVA, ES6, Babel, Travis CI, XO',
		url: 'https://github.com/radiovisual/birdwatch'
	},
	{
		title: 'Tracks 2.0',
		type: types.FULL_STACK,
		img: 'dist/img/thumbs/tracks02.png',
		description: 'Tracks is a storytelling platform giving voice and awareness to the refugees affected by the Syria crisis. We revamped the platform with a completely new design and fresh features. Some of the highlighting features are the custom social integrations and custom search options.',
		techs: 'Node.js, JavaScript, PHP, HTML/SASS',
		url: 'http://tracks.unhcr.org'
	},
	{
		title: 'STAIT',
		type: types.FULL_STACK,
		img: 'dist/img/thumbs/stait02.png',
		description: 'The Senior Transformative Agenda Implementation Team (STAIT) was created by the Inter-Agency Standing Committee (IASC) Emergency Directors’ Group (EDG) in 2014. STAIT needed a custom web portal and Content Management System to archive and present collected research while providing peer support to Humanitarian Coordinators (HCs) and Humanitarian Country Teams (HCTs) in order to strengthen the effectiveness of humanitarian response in the field.',
		techs: 'Python, Django, Node.js, Gulp, Handlebars, Photoshop, HTML/SASS',
		url: 'http://www.deliveraidbetter.org'
	},
	{
		title: 'VisualSploit 2.0',
		type: types.WEB_APP,
		img: 'dist/img/thumbs/0005_visual-sploit.png',
		description: 'I designed and developed the Front-end UI/UX to plug into a Python backend to bring Immunity\'s VisualSploit software to the web. The software itself is property of Immunity Inc, so I don\'t have an online demo, but with Immunity\'s permission, I have posted a screenshot of the working application.',
		techs: 'JavaScript, Python, HTML/CSS, Photoshop',
		url: '../archives/immunity/visual-sploit-screenshot.jpg',
		rel: 'visualsploit'
	},
	{
		title: 'WebSeige',
		type: types.WEB_APP,
		img: 'dist/img/thumbs/0004_web-siege.png',
		description: 'I designed the front-end UI/UX to plug into a Python backend to bring Immunity\'s WebSeige software to the web. The software itself is property of Immunity Inc, so I don\'t have an online demo, but with Immunity\'s permission, I have posted a screenshot of the working application.',
		techs: 'JavaScript, Python, HTML/CSS, Photoshop',
		url: '../archives/immunity/websiege-screenshot.jpg',
		rel: 'webseige'
	},
	{
		title: 'Infiltrate Badges',
		type: types.DESIGN,
		img: 'dist/img/thumbs/0006_infiltrate-badges.png',
		description: 'I designed the Conference Badges for Immunity\'s Infiltrate Security Conference 2013.',
		techs: 'Photoshop',
		url: 'http://www.numetriclabs.com/immunity/AF34BC21DE35CF78DA12/Infiltrate-Badge-Previews.html'
	},
	{
		title: 'Timecard',
		type: types.NODE,
		img: 'dist/img/thumbs/0018__timecard.png',
		description: 'Keep track of your project development time with this handy cross-platform CLI developed in Node.js.',
		techs: 'Node.js, AVA, ES6, Babel',
		url: 'https://github.com/radiovisual/timecard'
	},
	{
		title: 'Media Walker',
		type: types.IOS,
		img: 'dist/img/thumbs/0008_media-walker.png',
		description: 'Use a video\'s subtitles as a remote control for the VLC Media Player. This WIP app will render a simple interface allowing you to use a video\'s subtitle file as a way of navigating and controlling playback of a video in the VLC Media Player, utilizing VLC\'s telnet interface. It was built as a language-learning tool for those who like to use movies as a way to study languages.',
		techs: 'Node.js, Electron',
		url: 'https://github.com/radiovisual/media-walker'
	},
	{
		title: 'Spine Explorer',
		type: types.WEB_APP,
		img: 'dist/img/thumbs/spine-explorer-app.png',
		description: 'This is the Spine Model Application I designed and developed for Prescott Valley Chiropractic. It has configurable viewing and explore modes, fullscreen capabilities and a custom drawing tool.',
		techs: 'Flash, ActionScript 3.0, Photoshop',
		rel: 'html-spine',
		url: '../archives/apps/spine-model.html'
	},
	{
		title: 'Stalker',
		type: types.WEB_APP,
		img: 'dist/img/thumbs/0010_stalker.png',
		description: 'A full-scale web application built with the security team at Immunity Inc. I designed and developed the entire front-end and plugged it into their core Python framework. The software itself is property of Immunity Inc, so I don\'t have an online demo, but with Immunity\'s permission, I have posted a screenshot of the application.',
		techs: 'JavaScript, HTML/CSS, Photoshop',
		url: '../archives/immunity/StalkerScreenshot.jpg',
		rel: 'stalker'
	},
	{
		title: 'NPM Lookup',
		type: types.MODULE,
		img: 'dist/img/thumbs/0017_npm-lookup.png',
		description: 'Chrome ContextMenu Extension - Turn selected text on a webpage into a quick npm package lookup. Perfect for quick lookup of JavaScript modules when reading source code on GitHub.',
		techs: 'JavaScript, Chrome Extension',
		url: 'https://github.com/radiovisual/github-npm-lookup'
	},
	{
		title: 'Secrets in your Pocket',
		type: types.DESIGN,
		img: 'dist/img/thumbs/0020_secrets-in-your-pocket.png',
		description: 'This custom flash presentation was built for Immunity, Inc. The presentation is all about analyzing the wireless data you leak to the public and also highlights the Stalker web application I built with them.',
		techs: 'Flash, Photoshop, Prezi',
		rel: 'secrets'
	},
	{
		title: 'What\'s at Stake?',
		type: types.DESIGN,
		img: 'dist/img/thumbs/0013_whats-at-stake.png',
		description: 'Custom Prezi presentation made for Immunity\'s CEO keynote speech at an upcoming conference entitled "What\'s at Stake?", I designed all the custom characters and graphics.',
		techs: 'Flash, Photoshop, Prezi',
		rel: 'stake',
		url: '../archives/immunity/WhatAtStake-Screenshot.jpg'
	},
	{
		title: 'Motion in Color',
		type: types.INTERACTIVE_WEB,
		img: 'dist/img/thumbs/0015_motion-in-color.png',
		description: 'This is a physics toy I built as part of my old web portfolio. I used a physics engine for the real-world simulations. It\'s fun to play with, so knock yourself out! Click, drag and throw to interact with the pieces of the app.',
		techs: 'Box2D, Flash, ActionScript 3.0',
		rel: 'html-motioncolor',
		url: '../archives/apps/motionincolor/motion-in-color.html'
	},
	{
		title: 'Hanna Lovinda Photography',
		type: types.INTERACTIVE_WEB,
		img: 'dist/img/thumbs/0016_hanna-lovinda.png',
		description: 'Flash website designed & developed for the talented Norwegian photographer Hanna Lovinda.',
		techs: 'Flash, ActionScript 3.0',
		url: 'http://numetriclabs.com/portfolio/archives/web/hannalovinda/'
	},
	{
		title: 'UNHCR Syria Appeal Video',
		type: types.VIDEO,
		img: 'dist/img/thumbs/0023_Layer-7.png',
		description: 'I designed and animated all the package graphics and overlays and assisted with the Video Production for this video highlighting the UNHCR\'s unprecedented Humanitarian appeal for the Syrian Refugees. This video was displayed at the United Nations Palais de Nations in 2013.',
		techs: 'Photoshop, After Effects, Adobe Premiere',
		url: 'https://www.youtube.com/watch?v=qvzmMuVWZGs'
	},
	{
		title: 'The Future of Syria',
		type: types.WEB_APP,
		img: 'dist/img/thumbs/0024_Layer-22.png',
		description: 'This website was built for the UNHCR to help bring awareness to the children suffering directly from the crisis in Syria. There are stories of refugee children who\'s lives have been forever altered by the crisis, and how they are trying to move forward despite all the horrors they have witnessed. There is a message form that allows visitors to send a message directly to the children living in the Refugee camps.',
		techs: 'HTML/CSS, JavaScript, Node.js, Heroku',
		url: '../archives/unhcr/demos/childrensreport/'
	},
	{
		title: 'This is Bob',
		type: types.ANIMATION,
		img: 'dist/img/thumbs/bob.png',
		description: 'Custom animation I created for Immunity Inc to use in the "Secret\'s in Your Pocket" presentation at the 2012 Infiltrate Conference in Miami Beach, Florida. Click on the screen to advance the animation.',
		techs: 'After Effects, Adobe Flash, Photoshop',
		url: '../archives/video-animation/this-is-bob.html'
	},
	{
		title: 'Refugees Weekly',
		type: types.WEB,
		img: 'dist/img/thumbs/0022_refugees-weekly.png',
		description: 'I helped develop this internal online memo for the UNHCR staff to be kept up on all the latest press coverage for the various communications teams.',
		techs: 'HTML/CSS, Javascript, Photoshop',
		url: 'http://weekly.unhcr.org/june-27-2014/'
	},
	{
		title: 'UNICEF/UNHCR Campaign Coverage Microsite',
		type: types.WEB,
		img: 'dist/img/thumbs/0000_awards-page.png',
		description: 'A simple microsite I designed and developed for UNICEF and the UNHCR to highlight the Awareness Campaign Coverage and Performance of the Media used to raise awareness of the Syrian Crisis, and the children directly affected.',
		techs: 'HTML/CSS, Photoshop, JavaScript',
		url: '../archives/unhcr/awards-page/'
	},
	{
		title: 'UNHCR Multimedia Memo',
		type: types.WEB,
		img: 'dist/img/thumbs/0001_syria-mmm-inforgraphics.png',
		description: 'This Multimedia Memo was used as an internal weekly roundup of all the Media surrounding the Syria crisis. This memo included weekly photos and videos from Syria and the refugee camps, a weekly infographic to tally the rising number of Refugees fleeing Syria and top news stories and tweets related to the Syria crisis.',
		techs: 'Photoshop, HTML/CSS, jQuery',
		url: '../archives/unhcr/MMM/jun13.html'
	},
	{
		title: 'Interactive Map',
		type: types.INTERACTIVE_WEB,
		img: 'dist/img/thumbs/0002_facebook-global-pages.png',
		description: 'I built this interactive map for the UNHCR Communications Teams to visualize the global language assignments of their managed facebook accounts.',
		techs: 'JavaScript, D3.js, HTML/CSS',
		url: '../archives/unhcr/unhcr-facebook-assignment-map'
	},
	{
		title: 'People Puzzler Demo 01',
		type: types.IOS,
		img: 'dist/img/thumbs/0012_people-puzzler-01.png',
		description: 'I designed & developed a prototype iPad application for Time Home Entertainment\'s People Puzzler mobile application. I built a working crossword puzzle and solver application that runs on iOS 3+.',
		techs: 'Objective-C, XCode'
	},
	{
		title: 'People Puzzler Demo 02',
		type: types.IOS,
		img: 'dist/img/thumbs/0011_people-puzzler-02.png',
		description: 'I designed and developed a prototype iPad application for Time Home Entertainment\'s People Puzzler mobile application. I built a working crossword puzzle and solver application that runs on iOS 3+.',
		techs: 'Objective-C, XCode'
	},
	{
		title: 'Sintari Music Group',
		type: types.THREED_DESIGN,
		img: 'dist/img/thumbs/sintari-music-group.png',
		description: 'I designed & developed this Flash website for a small music start-up called Sintari Music Group. I designed their corporate identity, marketing materials and did many custom 3D renderings and animations.',
		techs: 'Maya, Flash, ActionScript, Photoshop'
	},
	{
		title: 'GlobalNet Training',
		type: types.THREED_DESIGN,
		img: 'dist/img/thumbs/globalnet.png',
		description: 'I made an Interactive Training DVD for the Globalnet company in Texas. I also built them a 3D logo and created an animated 3D DVD buffer.',
		techs: 'Maya, Flash, ActionScript, Photoshop, Director'
	}
];

/**
 * Keep some variables available globally so we don't have
 * to keep re-calculating needlessly.
 */
var NL = {
	oldWidth: $(window).width(),
	isMobile: false,
	windowWidth: null,
	braggingInterval: null,
	scrollTopAtLock: 0,
	isDetailViewOpen: false
};

/**
 * Check to see if the user has changed the screen
 * dimensions from a mobile size to a desktop size.
 *
 * @returns {boolean}
 */
function shouldSwitchFromMobileToDesktop() {
	if (NL.oldWidth < NL.windowWidth && NL.oldWidth < 600) {
		console.log('went from mobile to desktop');
		return true;
	}
	return false;
}

/**
 * After the screen goes from desktop to mobile resolutions, some of the
 * mobile details are hidden. This function will make sure that they are not
 * hidden.
 *
 */
function ensureMobileVisibilityAfterTransition() {
	$('.thumb').each(function() {
		$(this).find('p').css('opacity', 1).show();
		$(this).find('b').css('opacity', 1).show();
	});
}

/**
 * Resize the thumbnails on the screen.
 *
 */
function resizeThumbs() {
	var thumbs = $('#thumbs');
	var thumb = $('.thumb');
	var thumbWidth = 0;
	var thumbHeight = 0;
	var aspectRatio = 1.5; // 714w/459h;
	NL.windowWidth = $(window).width();
	NL.isMobile = NL.windowWidth < 600;
	var perRow = 3;

	if (shouldSwitchFromMobileToDesktop()) {
		thumb.each(function() {
			applyThumbBehaviorsForDesktop($(this));
		});
	} else {
		ensureMobileVisibilityAfterTransition();
	}

	NL.oldWidth = NL.windowWidth;

	if (NL.windowWidth < 900 && NL.windowWidth > 715) {
		perRow = 2;
	} else if (NL.windowWidth < 715) {
		perRow = 1;
	}
	var padding = 2;

	var width = NL.windowWidth / perRow;
	var height = NL.windowWidth < 600 ? 'auto' : width / aspectRatio;
	thumbWidth = width - padding * 2;
	thumbHeight = height;
	thumb.width(thumbWidth);
	thumb.height(thumbHeight);
}

/**
* Create the thumbs HTML from the projects object.
*
**/
function generateThumbs() {
	var thumbs = $('#thumbs');

	projects.forEach(function(project, index) {
		var Img = new Image();
		Img.src = project.img;
		Img.alt = project.title;
		Img.onload = function() {
			var thumb = $('.thumb').eq(index);

			var img = thumb.find('img');
			img.attr('src', project.img);
			img.show();

			thumb.find('.preloader').fadeOut();
			TweenLite.fromTo(img, 1, {opacity: 0, marginTop: '-100%'}, {opacity: 1, marginTop: '0'});

			// now apply the hover/click behaviors
			if (!NL.isMobile) {
				applyThumbBehaviorsForDesktop(thumb);
			}
		};

		var context = project;
		context.index = index;
		context.color = getColorForIndex(index);
		var html = Handlebars.templates.thumb(context);
		thumbs.append(html);
	});

	resizeThumbs();
}

/**
 * Fetch the correct color for the thumb index.
 *
 * @param index
 * @returns {*}
 */
function getColorForIndex(index) {
	if (index % 2 === 0) {
		return colors.RED;
	}
	return colors.BLUE;
}

/**
* Assign the actual hover and click behaviors to the thumbs.
*
**/
function applyThumbBehaviorsForDesktop(thumb) {
	var leftCurtain = $('#curtainLeft');
	var rightCurtain = $('#curtainRight');
	var index = thumb.data('index');

	thumb.hover(function () {
		if (NL.isMobile) {
			return false;
		}
		var _thumb = $(this);
		TweenLite.to(_thumb.find('img'), 1, {
			height: '110%',
			width: '110%',
			marginLeft: '-5%',
			marginTop: '-5%',
			ease: Power2.easeOut
		});
		TweenLite.to($(this).find('.overlay'), .3, {opacity: .95, top: '0'});
		TweenLite.fromTo($(this).find('b'), .5, {'padding-top': '40px'}, {delay: .2, 'padding-top': '0', opacity: 1});
		TweenLite.fromTo($(this).find('p'), .5, {'padding-top': '10px'}, {delay: .4, 'padding-top': '0', opacity: 1});
	}, function () {
		if (NL.isMobile) {
			return false;
		}
		var _thumb = $(this);
		TweenLite.to(_thumb.find('img'), .3, {height: '100%', width: '100%', marginLeft: '0', marginTop: '0'});
		TweenLite.to($(this).find('.overlay'), .3, {
			top: '100%', opacity: 0, onComplete: function () {
				_thumb.find('b').css('opacity', 0);
				_thumb.find('p').css('opacity', 0);
			}
		});
	});

	thumb.click(function () {
		if (NL.isMobile) {
			return false;
		}
		TweenLite.fromTo(leftCurtain, .5, {left: '-50%'}, {
			left: '0%', ease: Quint.easeInOut, onComplete: function () {
				loadDetailForProject(index);
			}
		});
		TweenLite.fromTo(rightCurtain, .5, {right: '-50%'}, {right: '0%', ease: Quint.easeInOut});
	});
}

/**
 * Lock the thumb view so that it wont scroll
 *
 */
function lockThumbView() {
	NL.scrollTopAtLock = $(document).scrollTop();
	$('#wrapper').addClass('lockThumbView').css({top: NL.scrollTopAtLock * -1});
}

/**
 * Unlock the thumb view so that it can scroll
 *
 */
function unlockThumbView() {
	$('#wrapper').removeClass('lockThumbView');
	$(document).scrollTop(NL.scrollTopAtLock);
}

/**
* Load the detail view for a project at the given index.
*
**/
function loadDetailForProject(projectIndex) {
	NL.isDetailViewOpen = true;
	var project = projects[projectIndex];
	var detail = $('#detail');
	var detailWrapper = $('#detail_wrapper');

	// reset the detail view on tablets
	detailWrapper.scrollTop(0);

	detail.data('index', projectIndex);
	project.reloading = false;

	// update the detail_wrapper with the correct information
	var html = Handlebars.templates.detail_wrapper(project);
	detailWrapper.html(html);

	// if project.rel, it means we want to open media with fancybox
	setDefaultFancyBoxOptionsForProject(project);

	lockThumbView();
	detail.css({opacity: 0}).show();
	TweenLite.fromTo(detail, .4, {marginTop: '100%'}, {marginTop: 0, opacity: 1});
	TweenLite.fromTo(detailWrapper, .6, {marginTop: '-100%', opacity: 0}, {marginTop: 0, opacity: 1});
	TweenLite.to($('.detail_image'), .6, {delay: .50, opacity: 1});
	TweenLite.to(detail.find('h1'), .6, {delay: .80, opacity: 1});
	TweenLite.to(detail.find('small'), .6, {delay: 1, opacity: 1});
	TweenLite.to(detail.find('p'), .6, {delay: 1.3, opacity: 1});
	TweenLite.to(detail.find('a'), .6, {delay: 1, opacity: 1});
}

/**
 * Set the project to use FancyBox if the project.rel option is provided
 * on the given project object.
 *
 * @param {Object} project
 */
function setDefaultFancyBoxOptionsForProject(project) {
	var detailWrapper = $('#detail_wrapper');

	// if project.rel, it means we want to open media with fancybox
	if (project.rel) {
		var options = {
			width: '100%',
			height: '100%',
			autoSize: true,
			type: project.rel.search('html') > -1 ? 'iframe' : 'image'
		};

		detailWrapper.find('a').click(function (e) {
			e.preventDefault();
			$.fancybox(project.url, options);
		});
	}
}

/**
 * Close the detail view after the close button has been clicked.
 *
 **/
function closeDetailView() {
	NL.isDetailViewOpen = false;
	var detail = $('#detail');
	var leftCurtain = $('#curtainLeft');
	var rightCurtain = $('#curtainRight');

	unlockThumbView();
	detail.fadeOut();

	TweenLite.to(leftCurtain, .5, {left: '-50%', ease: Quint.easeInOut});
	TweenLite.to(rightCurtain, .5, {right: '-50%', ease: Quint.easeInOut});
}

/**
 * Switch the active detail view to another project.
 *
 */
function switchDetailViewToNewIndex(projectIndex) {
	var project = projects[projectIndex];
	var detail = $('#detail');
	var detailWrapper = $('#detail_wrapper');
	var leftCurtain = $('#detail_wrapper_left_curtain');
	var rightCurtain = $('#detail_wrapper_right_curtain');

	// move the detailWrapper to the scrollTop on devices that
	// allow scrolling. This prevents the curtains from looking
	// like they are too short when they get animated/replaced
	TweenLite.to(detailWrapper, .3, {scrollTop:0});

	// reset curtain heights when screen height changes
	leftCurtain.height(detailWrapper.height());
	rightCurtain.height(detailWrapper.height());

	TweenLite.fromTo(rightCurtain, .6, {right: '-50%'}, {right: '0%'});
	TweenLite.fromTo(leftCurtain, .6, {left: '-50%'}, {left: '0%', onComplete: function() {

		// tell the template that that we are reloading the view
		project.reloading = true;

		// update the detail_wrapper with the correct information
		var html = Handlebars.templates.detail_wrapper(project);
		detailWrapper.html(html);

		// reset curtain heights when screen height changes
		// call this twice to account for the newly-added curtain divs
		leftCurtain.height(detailWrapper.height());
		rightCurtain.height(detailWrapper.height());

		// setup FancyBox to use with this project Detail if applicable
		setDefaultFancyBoxOptionsForProject(project);

		detail.data('index', projectIndex);
		TweenLite.to($('#detail_wrapper_left_curtain'), .6, {left: '-50%'});
		TweenLite.to($('#detail_wrapper_right_curtain'), .6, {right: '-50%'});

		detail.css({opacity: 1}).show();
		TweenLite.to($('.detail_image'), .6, {delay: .50, opacity: 1});
		TweenLite.to(detail.find('h1'), .6, {delay: .80, opacity: 1});
		TweenLite.to(detail.find('small'), .6, {delay: 1, opacity: 1});
		TweenLite.to(detail.find('p'), .6, {delay: 1.3, opacity: 1});
		TweenLite.to(detail.find('a'), .6, {delay: 1, opacity: 1});
	}});
}

/**
 * Get the next index in the project list or revert back to zero.
 *
 * @param index
 * @returns {*}
 */
function getProjectNextIndexFromIndex(index) {
	if (index + 1 > projects.length - 1) {
		return 0;
	}
	return index + 1;
}

/**
 * Get the previous index in the project list or revert back to the final project.
 *
 * @param index
 * @returns {number}
 */
function getProjectPrevIndexFromIndex(index) {
	if (index - 1 < 0) {
		return projects.length - 1;
	}
	return index - 1;
}

/**
 * Physically close the about me section.
 *
 */
function closeAboutMe() {
	var about = $('#about-me');
	TweenLite.to($('#about-me-p'), .6, {opacity: 0});
	TweenLite.to(about, .6, {delay: .5, opacity: 0, onComplete: function() {
		about.hide();
	}});
}

/**
 * Physically open the about me section.
 *
 */
function openAboutMe() {
	var about = $('#about-me');
	about.css('opacity', 0).show();
	TweenLite.fromTo(about, .4, {opacity: 0}, {opacity: 1});
	TweenLite.fromTo($('#about-me-p'), .4, {marginTop: '100px', opacity: 0}, {delay: .4, marginTop: '65px', opacity: 1});
}

function launchMobileDetail(e) {
	if (!NL.isMobile) {
		return;
	}
	var thumb = $(this).parent();
	var index = thumb.data('index');
	var project = projects[index];

	e.preventDefault();

	// if project.rel, it means we want to open media with fancybox
	if (project.rel) {
		var options = {
			width: '100%',
			height: '100%',
			autoSize: true,
			type: project.rel.search('html') > -1 ? 'iframe' : 'image'
		};

		$.fancybox(project.url, options);
	} else {
		window.open(project.url, '_blank');
	}
}

/**
 * Scramble the welcome text
 *
 */
function loadWelcomeScreen() {
	var welcome = $('#welcome');
	var chars = '1234567890';

	TweenLite.fromTo($('#top-wrapper'), 3, {opacity: 0, marginTop: '0px'}, {opacity: 1, marginTop: '120px'});
	TweenLite.fromTo(welcome.find('#l'), 3, {opacity: 0}, {opacity: 1, scrambleText: {text: "MICHAEL", chars: chars, speed: 0.2, tweenLength: false, revealDelay: 1}});
	TweenLite.fromTo(welcome.find('#r'), 3, {opacity: 0}, {opacity: 1, scrambleText: {text: "WUERGLER", chars: chars, speed: 0.2, tweenLength: false, revealDelay: 1}});
	TweenLite.fromTo($('#text-wrap b'), 3, {opacity: 0}, {opacity: 1, fontSize: '12px', scrambleText: {text:"NUMETRICLABS: ", chars: chars}});
	TweenLite.fromTo($('.online'), 3, {opacity: 0}, {opacity: 1, fontSize: '12px', scrambleText: {text:"THE ONLINE PORTFOLIO OF", chars: chars}});
	TweenLite.to(welcome.find('p'), 3, {opacity: 1, delay: 2, onComplete: startBragging, scrambleText: {text: "Full-Stack JavaScript Developer", chars: chars, speed: 0.2, tweenLength: false, revealDelay: 1}});

	var btmWrapper = $('#btm-wrapper');
	btmWrapper.css({opacity:0}).show();
	TweenLite.fromTo(btmWrapper, 3, {opacity: 0, bottom:'100px'}, {delay: 4, opacity: 1, bottom:'22px', ease: Power4.easeOut});
}

/**
 * Start the scrambled text animation on the Welcome Screen.
 *
 */
function startBragging() {
	var p = $('#welcome').find('p');
	var text = p.text();
	var index = who_am_i.indexOf(text);

	if (index === who_am_i.length - 1) {
		index = 0;
	} else {
		index++;
	}

	if (!NL.braggingInterval) {
		NL.braggingInterval = setInterval(startBragging, 3000);
	}
	TweenLite.fromTo(p, .5, {opacity: 1}, {opacity: 0, onComplete: function () {
		TweenLite.fromTo(p, 2, {opacity: 0}, {opacity: 1, scrambleText: {text: who_am_i[index], chars: '0123456789', speed: 0.2, revealDelay: .5, tweenLength: false}});
	}});
}

/**
 * Close the welcome screen and start the opening animation
 *
 */
function closeWelcomeScreen() {
	clearInterval(NL.braggingInterval);
	var wrapper = $('#wrapper');
	var btmWrapper = $('#btm-wrapper');
	var welcome = $('#welcome');

	wrapper.addClass('floatingWrapper');
	TweenLite.to(welcome, 3, {opacity: 0, top: '-100%'});
	// get the main screen out of view and temporarily pop it above the welcome screen

	TweenLite.to(wrapper, 2, {top: '0%', onComplete: function() {
		wrapper.removeClass('floatingWrapper');
		welcome.hide();
	}});

	TweenLite.to(btmWrapper, 1, {top: '40%', opacity:0});
}

// This is the starting point for the app.
$(function() {
	TweenLite.defaultEase = Power2.easeInOut;
	generateThumbs();
	$('#close_button').click(closeDetailView);

	var detail = $('#detail');

	$('#prev').click(function() {
		switchDetailViewToNewIndex(getProjectPrevIndexFromIndex(detail.data('index')));
	});

	$('#next').click(function() {
		switchDetailViewToNewIndex(getProjectNextIndexFromIndex(detail.data('index')));
	});

	$('#about-me-btn').click(function(e) {
		e.preventDefault();
		openAboutMe();
	});

	$('#about_close_button').click(closeAboutMe);

	$('.mobile-launch-btn').click(launchMobileDetail);

	// Set the empty thumb shell to the correct width/height
	// while we wait for the images to preload.
	$(window).resize(_.debounce(function () {
		resizeThumbs();
	}, 100));

	resizeThumbs();

	loadWelcomeScreen();

	$('#view-work-btn').click(closeWelcomeScreen);

	document.onkeydown = checkKey;

  const keyCodeDirections = {
      37: 'left',
      39: 'right'
  };

	function checkKey(e) {
		if (NL.isDetailViewOpen) {
			e = e || window.event;
	    const keyCode = e.keyCode;
	    const arrow = keyCodeDirections[keyCode];
			const currentIndex = detail.data('index');
	    if (arrow === 'left') {
				switchDetailViewToNewIndex(getProjectPrevIndexFromIndex(currentIndex));
	    } else if (arrow === 'right') {
	      switchDetailViewToNewIndex(getProjectNextIndexFromIndex(currentIndex));
	    }
		}
  }
});
