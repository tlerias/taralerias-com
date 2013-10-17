/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
var fonts = {
};
var symbols = {
"stage": {
   version: "0.1.4",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: true,
   content: {
      dom: [
        {
            id:'name90',
            className:'stage_name90_id',
            type:'image',
            rect:[0,0,59,317],
            fill:['rgba(0,0,0,0)','images/name90.png'],
            transform:[[38,76]]
        },
        {
            id:'contact',
            className:'stage_contact_id',
            type:'text',
            rect:[193,139,0,0],
            text:"contact",
            font:["Arial Black, Gadget, sans-serif",26,"rgba(51,204,0,1.00)","normal","none",""],
            transform:[[-58,96]]
        },
        {
            id:'webdesign',
            className:'stage_webdesign_id',
            type:'text',
            rect:[124,30,0,0],
            text:"web design",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",26,"rgba(51,204,0,1)","normal","none","normal"],
            transform:[[1.31201,-62.83202]]
        },
        {
            id:'graphicdesign',
            className:'stage_graphicdesign_id',
            type:'text',
            rect:[48.384033203125,-76.031997680664,0,0],
            text:"graphic design",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",26,"rgba(204,255,0,1.00)","normal","none","normal"],
            transform:[[75.616,38.032]]
        },
        {
            id:'advertising',
            className:'stage_advertising_id',
            type:'text',
            rect:[139.96801757812,48.384017944336,0,0],
            text:"advertising",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",26,"rgba(204,255,0,1)","normal","none","normal"],
            transform:[[-15.968,-86.384]]
        },
        {
            id:'advertisingLink',
            className:'stage_advertisingLink_id',
            type:'rect',
            rect:[125.38579559326,119.75951385498,159,31],
            fill:['rgba(192,192,192,1)',null],
            stroke:[0,"rgb(0, 0, 0)","none"],
            transform:[[0,5]]
        },
        {
            id:'resume',
            className:'stage_resume_id',
            type:'text',
            rect:[129.60003662109,0,0,0],
            text:"resume",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",26,"rgba(204,255,0,1)","normal","none","normal"],
            transform:[[-0.60002,-38]]
        },
        {
            id:'aboutme',
            className:'stage_aboutme_id',
            type:'text',
            rect:[145.15203857422,-31.103996276855,0,0],
            text:"about me",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",26,"rgba(204,255,0,1)","normal","none","normal"],
            transform:[[-21.152,-6.896]]
        },
        {
            id:'aboutmeLink',
            className:'stage_aboutmeLink_id',
            type:'rect',
            rect:[123.77827453613,69.926689147949,131,24],
            fill:['rgba(192,192,192,1)',null],
            stroke:[0,"rgb(0, 0, 0)","none"],
            transform:[[0,3]]
        },
        {
            id:'resumeLink',
            className:'stage_resumeLink_id',
            type:'rect',
            rect:[118.95574188232,99.665634155273,114.13321685791,24],
            fill:['rgba(192,192,192,1)',null],
            stroke:[0,"rgb(0, 0, 0)","none"]
        },
        {
            id:'graphicdesignLink',
            className:'stage_graphicdesignLink_id',
            type:'rect',
            rect:[124.58203125,152.7134552002,206,31],
            fill:['rgba(192,192,192,1)',null],
            stroke:[0,"rgb(0, 0, 0)","none"]
        },
        {
            id:'webdesignLink',
            className:'stage_webdesignLink_id',
            type:'rect',
            rect:[122.1707611084,188.88243103027,159,24],
            fill:['rgba(192,192,192,1)',null],
            stroke:[0,"rgb(0, 0, 0)","none"]
        },
        {
            id:'contactLink',
            className:'stage_contactLink_id',
            type:'rect',
            rect:[122.17077636719,208.40637207031,114,24],
            fill:['rgba(192,192,192,1)',null],
            stroke:[0,"rgb(0, 0, 0)","none"],
            transform:[[0,6.99999]]
        }],
      symbolInstances: [

      ]
   },
   states: {
      "Base State": {
         "${_aboutme}": [
            ["color", "color", 'rgba(204,255,0,1)'],
            ["transform", "translateY", '-6.896px'],
            ["transform", "translateX", '-21.152px']
         ],
         "${_advertisingLink}": [
            ["style", "height", '31px'],
            ["style", "opacity", '0'],
            ["transform", "translateY", '5px']
         ],
         "${_aboutmeLink}": [
            ["style", "height", '24px'],
            ["style", "opacity", '0'],
            ["transform", "translateY", '3px']
         ],
         "${_name90}": [
            ["transform", "translateX", '38px'],
            ["transform", "translateY", '76px']
         ],
         "${_resumeLink}": [
            ["style", "opacity", '0']
         ],
         "${_contact}": [
            ["style", "width", '126px'],
            ["transform", "translateX", '-68px'],
            ["style", "clip", [0,109,37,0],{valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'}],
            ["style", "height", '36px'],
            ["color", "color", 'rgba(51,204,0,1.00)'],
            ["transform", "translateY", '-170px'],
            ["style", "font-size", '26px']
         ],
         "${_stage}": [
            ["color", "background-color", 'rgba(51,51,51,1)'],
            ["style", "height", '500px'],
            ["style", "width", '500px']
         ],
         "${_graphicdesign}": [
            ["color", "color", 'rgba(204,255,0,1.00)'],
            ["transform", "translateX", '75.616px'],
            ["transform", "translateY", '38.032px']
         ],
         "${_contactLink}": [
            ["style", "height", '24px'],
            ["style", "opacity", '0'],
            ["transform", "translateY", '6.99999px']
         ],
         "${_graphicdesignLink}": [
            ["style", "opacity", '0']
         ],
         "${_webdesignLink}": [
            ["style", "height", '24px'],
            ["style", "opacity", '0']
         ],
         "${_resume}": [
            ["color", "color", 'rgba(204,255,0,1)'],
            ["transform", "translateY", '-32.816px'],
            ["transform", "translateX", '-5.6px']
         ],
         "${_webdesign}": [
            ["transform", "translateX", '1.31201px'],
            ["transform", "translateY", '-81.84002px']
         ],
         "${_advertising}": [
            ["transform", "translateX", '-15.968px'],
            ["transform", "translateY", '-86.384px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 4500,
         autoPlay: true,
         labels: {

         },
         timeline: [
            { id: "eid32", tween: [ "transform", "${_webdesign}", "translateX", '1.31201px', { fromValue: '1.31201px'}], position: 750, duration: 0 },
            { id: "eid34", tween: [ "transform", "${_webdesign}", "translateY", '150px', { fromValue: '-81.84002px'}], position: 750, duration: 750 },
            { id: "eid49", tween: [ "transform", "${_aboutme}", "translateX", '-21.152px', { fromValue: '-21.152px'}], position: 3750, duration: 0 },
            { id: "eid83", tween: [ "transform", "${_aboutme}", "translateX", '-21.152px', { fromValue: '-21.152px'}], position: 4500, duration: 0 },
            { id: "eid40", tween: [ "transform", "${_advertising}", "translateX", '-14.968px', { fromValue: '-15.968px'}], position: 2250, duration: 750 },
            { id: "eid56", tween: [ "color", "${_aboutme}", "color", 'rgba(255,255,0,1.00)', { animationColorSpace: 'RGB', valueTemplate: undefined, fromValue: 'rgba(204,255,0,1)'}], position: 3000, duration: 1500 },
            { id: "eid55", tween: [ "transform", "${_resume}", "translateX", '-5.6px', { fromValue: '-5.6px'}], position: 3000, duration: 0 },
            { id: "eid84", tween: [ "transform", "${_resume}", "translateX", '-5.6px', { fromValue: '-5.6px'}], position: 4500, duration: 0 },
            { id: "eid37", tween: [ "transform", "${_graphicdesign}", "translateY", '222px', { fromValue: '38.032px'}], position: 1500, duration: 750 },
            { id: "eid44", tween: [ "transform", "${_resume}", "translateY", '90.45599px', { fromValue: '-32.816px'}], position: 3000, duration: 750 },
            { id: "eid28", tween: [ "transform", "${_contact}", "translateX", '-68px', { fromValue: '-68px'}], position: 0, duration: 0 },
            { id: "eid51", tween: [ "transform", "${_aboutme}", "translateY", '95.78398px', { fromValue: '-6.896px'}], position: 3750, duration: 750 },
            { id: "eid41", tween: [ "transform", "${_advertising}", "translateY", '70px', { fromValue: '-86.384px'}], position: 2250, duration: 750 },
            { id: "eid35", tween: [ "transform", "${_graphicdesign}", "translateX", '75.616px', { fromValue: '75.616px'}], position: 1500, duration: 0 },
            { id: "eid31", tween: [ "transform", "${_contact}", "translateY", '66px', { fromValue: '-170px'}], position: 0, duration: 750 },
            { id: "eid57", tween: [ "color", "${_resume}", "color", 'rgba(255,255,0,1.00)', { animationColorSpace: 'RGB', valueTemplate: undefined, fromValue: 'rgba(204,255,0,1)'}], position: 3000, duration: 1500 }         ]
      }
   }
}
};

Edge.registerCompositionDefn(compId, symbols, fonts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-212200304");
