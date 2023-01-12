/*
 Highcharts JS v9.0.1 (2021-02-15)

 (c) 2009-2021 Sebastian Bochan, Rafal Sebestjanski

 License: www.highcharts.com/license
*/
(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/modules/dumbbell",["highcharts"],function(h){a(h);a.Highcharts=h;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function h(a,d,k,l){a.hasOwnProperty(d)||(a[d]=l.apply(null,k))}a=a?a._modules:{};h(a,"Series/AreaRange/AreaRangePoint.js",[a["Series/Area/AreaSeries.js"],a["Core/Series/Point.js"],a["Core/Utilities.js"]],function(a,
d,k){var l=this&&this.__extends||function(){var b=function(a,c){b=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(c,a){c.__proto__=a}||function(c,a){for(var b in a)a.hasOwnProperty(b)&&(c[b]=a[b])};return b(a,c)};return function(a,c){function q(){this.constructor=a}b(a,c);a.prototype=null===c?Object.create(c):(q.prototype=c.prototype,new q)}}(),e=d.prototype,m=k.defined,f=k.isNumber;return function(a){function b(){var b=null!==a&&a.apply(this,arguments)||this;b.high=void 0;b.low=void 0;
b.options=void 0;b.plotHigh=void 0;b.plotLow=void 0;b.plotHighX=void 0;b.plotLowX=void 0;b.plotX=void 0;b.series=void 0;return b}l(b,a);b.prototype.setState=function(){var b=this.state,a=this.series,f=a.chart.polar;m(this.plotHigh)||(this.plotHigh=a.yAxis.toPixels(this.high,!0));m(this.plotLow)||(this.plotLow=this.plotY=a.yAxis.toPixels(this.low,!0));a.stateMarkerGraphic&&(a.lowerStateMarkerGraphic=a.stateMarkerGraphic,a.stateMarkerGraphic=a.upperStateMarkerGraphic);this.graphic=this.upperGraphic;
this.plotY=this.plotHigh;f&&(this.plotX=this.plotHighX);e.setState.apply(this,arguments);this.state=b;this.plotY=this.plotLow;this.graphic=this.lowerGraphic;f&&(this.plotX=this.plotLowX);a.stateMarkerGraphic&&(a.upperStateMarkerGraphic=a.stateMarkerGraphic,a.stateMarkerGraphic=a.lowerStateMarkerGraphic,a.lowerStateMarkerGraphic=void 0);e.setState.apply(this,arguments)};b.prototype.haloPath=function(){var a=this.series.chart.polar,b=[];this.plotY=this.plotLow;a&&(this.plotX=this.plotLowX);this.isInside&&
(b=e.haloPath.apply(this,arguments));this.plotY=this.plotHigh;a&&(this.plotX=this.plotHighX);this.isTopInside&&(b=b.concat(e.haloPath.apply(this,arguments)));return b};b.prototype.isValid=function(){return f(this.low)&&f(this.high)};return b}(a.prototype.pointClass)});h(a,"Series/Dumbbell/DumbbellPoint.js",[a["Series/AreaRange/AreaRangePoint.js"],a["Core/Utilities.js"]],function(a,d){var k=this&&this.__extends||function(){var a=function(f,b){a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&
function(a,b){a.__proto__=b}||function(a,b){for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c])};return a(f,b)};return function(f,b){function e(){this.constructor=f}a(f,b);f.prototype=null===b?Object.create(b):(e.prototype=b.prototype,new e)}}(),l=d.extend,e=d.pick;d=function(a){function f(){var b=null!==a&&a.apply(this,arguments)||this;b.series=void 0;b.options=void 0;b.connector=void 0;b.pointWidth=void 0;return b}k(f,a);f.prototype.setState=function(){var a=this.series,f=a.chart,c=a.options.marker,
d=this.options,k=e(d.lowColor,a.options.lowColor,d.color,this.zone&&this.zone.color,this.color,a.color),h="attr";this.pointSetState.apply(this,arguments);this.state||(h="animate",this.lowerGraphic&&!f.styledMode&&(this.lowerGraphic.attr({fill:k}),this.upperGraphic&&(f={y:this.y,zone:this.zone},this.y=this.high,this.zone=this.zone?this.getZone():void 0,c=e(this.marker?this.marker.fillColor:void 0,c?c.fillColor:void 0,d.color,this.zone?this.zone.color:void 0,this.color),this.upperGraphic.attr({fill:c}),
l(this,f))));this.connector[h](a.getConnectorAttribs(this))};return f}(a);l(d.prototype,{pointSetState:a.prototype.setState});return d});h(a,"Series/Dumbbell/DumbbellSeries.js",[a["Series/Column/ColumnSeries.js"],a["Series/Dumbbell/DumbbellPoint.js"],a["Core/Globals.js"],a["Core/Color/Palette.js"],a["Core/Series/Series.js"],a["Core/Series/SeriesRegistry.js"],a["Core/Renderer/SVG/SVGRenderer.js"],a["Core/Utilities.js"]],function(a,d,k,h,e,m,f,b){var l=this&&this.__extends||function(){var a=function(b,
g){a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(a,g){a.__proto__=g}||function(a,g){for(var b in g)g.hasOwnProperty(b)&&(a[b]=g[b])};return a(b,g)};return function(b,g){function c(){this.constructor=b}a(b,g);b.prototype=null===g?Object.create(g):(c.prototype=g.prototype,new c)}}(),c=a.prototype;k=k.noop;var q=e.prototype;e=m.seriesTypes;var r=e.arearange;e=e.columnrange.prototype;var t=r.prototype,v=b.extend,w=b.merge,n=b.pick;b=function(a){function b(){var b=null!==a&&a.apply(this,
arguments)||this;b.data=void 0;b.options=void 0;b.points=void 0;b.columnMetrics=void 0;return b}l(b,a);b.prototype.getConnectorAttribs=function(a){var b=this.chart,g=a.options,c=this.options,u=this.xAxis,e=this.yAxis,d=n(g.connectorWidth,c.connectorWidth),h=n(g.connectorColor,c.connectorColor,g.color,a.zone?a.zone.color:void 0,a.color),k=n(c.states&&c.states.hover&&c.states.hover.connectorWidthPlus,1),l=n(g.dashStyle,c.dashStyle),m=n(a.plotLow,a.plotY),p=e.toPixels(c.threshold||0,!0);p=n(a.plotHigh,
b.inverted?e.len-p:p);a.state&&(d+=k);0>m?m=0:m>=e.len&&(m=e.len);0>p?p=0:p>=e.len&&(p=e.len);if(0>a.plotX||a.plotX>u.len)d=0;a.upperGraphic&&(u={y:a.y,zone:a.zone},a.y=a.high,a.zone=a.zone?a.getZone():void 0,h=n(g.connectorColor,c.connectorColor,g.color,a.zone?a.zone.color:void 0,a.color),v(a,u));a={d:f.prototype.crispLine([["M",a.plotX,m],["L",a.plotX,p]],d,"ceil")};b.styledMode||(a.stroke=h,a["stroke-width"]=d,l&&(a.dashstyle=l));return a};b.prototype.drawConnector=function(a){var b=n(this.options.animationLimit,
250);b=a.connector&&this.chart.pointCount<b?"animate":"attr";a.connector||(a.connector=this.chart.renderer.path().addClass("highcharts-lollipop-stem").attr({zIndex:-1}).add(this.markerGroup));a.connector[b](this.getConnectorAttribs(a))};b.prototype.getColumnMetrics=function(){var a=c.getColumnMetrics.apply(this,arguments);a.offset+=a.width/2;return a};b.prototype.translate=function(){this.setShapeArgs.apply(this);this.translatePoint.apply(this,arguments);this.points.forEach(function(a){var b=a.shapeArgs,
c=a.pointWidth;a.plotX=b.x;b.x=a.plotX-c/2;a.tooltipPos=null});this.columnMetrics.offset-=this.columnMetrics.width/2};b.prototype.drawPoints=function(){var a=this.chart,b=this.points.length,c=this.lowColor=this.options.lowColor,e=0;for(this.seriesDrawPoints.apply(this,arguments);e<b;){var d=this.points[e];this.drawConnector(d);d.upperGraphic&&(d.upperGraphic.element.point=d,d.upperGraphic.addClass("highcharts-lollipop-high"));d.connector.element.point=d;if(d.lowerGraphic){var f=d.zone&&d.zone.color;
f=n(d.options.lowColor,c,d.options.color,f,d.color,this.color);a.styledMode||d.lowerGraphic.attr({fill:f});d.lowerGraphic.addClass("highcharts-lollipop-low")}e++}};b.prototype.markerAttribs=function(){var a=t.markerAttribs.apply(this,arguments);a.x=Math.floor(a.x);a.y=Math.floor(a.y);return a};b.prototype.pointAttribs=function(a,b){var c=q.pointAttribs.apply(this,arguments);"hover"===b&&delete c.fill;return c};b.defaultOptions=w(r.defaultOptions,{trackByArea:!1,fillColor:"none",lineWidth:0,pointRange:1,
connectorWidth:1,stickyTracking:!1,groupPadding:.2,crisp:!1,pointPadding:.1,lowColor:h.neutralColor80,states:{hover:{lineWidthPlus:0,connectorWidthPlus:1,halo:!1}}});return b}(r);v(b.prototype,{crispCol:c.crispCol,drawGraph:k,drawTracker:a.prototype.drawTracker,pointClass:d,setShapeArgs:e.translate,seriesDrawPoints:t.drawPoints,trackerGroups:["group","markerGroup","dataLabelsGroup"],translatePoint:t.translate});m.registerSeriesType("dumbbell",b);"";return b});h(a,"masters/modules/dumbbell.src.js",
[],function(){})});
//# sourceMappingURL=dumbbell.js.map