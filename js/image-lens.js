
(function($, undefined) {
    $.support.borderRadius = (function(){
        var b = 'WebkitBorderRadius MozBorderRadius KhtmlBorderRadius borderRadius'.split(' '),
            body = document.body || document.documentElement,
            j = b.length;
        while (j--) {
            if (body.style[b[j]] !== undefined) {
                return true;
            }
        }
        return false;
    })();

    $.fn.imageLens = function() {
        var options = $.extend({
                lensSize : 100,
                borderSize : 4,
                borderColor : '#888'
            }, arguments[0] || {}),
            css = {
                'border-radius' : options.lensSize,
                'border' : options.borderSize + 'px solid ' + options.borderColor,
                'position' : 'absolute',
                'width' : options.lensSize,
                'height' : options.lensSize,
                'z-index' : 999,
                'background-color' : '#fff',
                'background-repeat' : 'no-repeat',
                'background-image' : 'url('+options.imageSrc+')'
            },
            parentCss = {
                'position' : 'relative',
                'display' : 'inline-block'
            },
            VMLNS = 'v',
            useVML = !$.support.borderRadius && $.browser.msie === true;
        if (useVML) { // no border radius, and this is IE, use VML for the roundness
            var e = ["shape", "shapetype", "group", "background", "path", "formulas", "handles", "fill", "stroke", "shadow", "textbox", "textpath", "imagedata", "line", "polyline", "curve", "roundrect", "oval", "rect", "arc", "image"],
                s = document.createStyleSheet(),
                j = e.length;
            if (document.namespaces[VMLNS] === undefined) {
                while (j--) {
                    s.addRule(VMLNS+"\\:" + e[j], "behavior: url(#default#VML); display:inline-block; zoom:1;");
                }
                document.namespaces.add(VMLNS, "urn:schemas-microsoft-com:vml");
            }
        }
        return this.each(function(){
            if (!options.imageSrc) {
                options.imageSrc = this.src;
                css['background-image'] = 'url('+options.imageSrc+')';
            }
            var ele = $(this),
                offset = ele.offset(),
                p = ele.wrap('<span />').parent().css(parentCss),
                dim = { width : p.width(), height : p.height() },
                lens = $('<div />').css(css).appendTo(p).hide().addClass('imagelens'),
                imgDim = { width : 0, height : 0 },
                img = new Image(),
                VMLFillEle;
            img.onload = function() {
                imgDim.width = this.width;
                imgDim.height = this.height;
            };
            img.src = options.imageSrc;

            if (useVML) {
                var g = document.createElement(VMLNS + ':group');
                g.setAttribute('coordsize', options.lensSize + ' ' + options.lensSize);
                g.style.width = options.lensSize + 'px';
                g.style.height = options.lensSize + 'px';
                
                var oval = document.createElement(VMLNS + ':oval');
                oval.style.width = options.lensSize + 'px';
                oval.style.height = options.lensSize + 'px';
                oval.setAttribute('strokeweight', (options.borderSize / options.lensSize) * 100);
                oval.setAttribute('strokecolor', options.borderColor);
                g.appendChild(oval);

                var fill = document.createElement(VMLNS + ':fill');
                fill.setAttribute('src', options.imageSrc);
                fill.setAttribute('type', 'tile');

                oval.appendChild(fill);

                VMLFillEle = fill;

                lens.append(g);
                lens.css({
                    'background' : 'transparent',
                    'border' : '0'
                });
            }

            p.bind('mouseenter', function(e){
                lens.show();
            }).bind('mouseleave', function(e){
                lens.hide();
            }).bind('mousemove', function(e) {
                var mouse = { 
                        x : e.pageX - offset.left,
                        y : e.pageY - offset.top
                    },
                    bg = { x : 0, y : 0 },
                    pos = { x : 0, y : 0 },
                    css;
                if (mouse.x > dim.width || mouse.y > dim.height || mouse.x < 0 || mouse.y < 0) {
                    lens.hide();
                    return;
                }
                pos.x = mouse.x - (options.lensSize / 2);
                pos.y = mouse.y - (options.lensSize / 2);
                
                bg.x = -(mouse.x * (imgDim.width / dim.width) - (options.lensSize / 2));
                bg.y = -(mouse.y * (imgDim.height / dim.height) - (options.lensSize / 2));
                css = {
                        'left' : pos.x,
                        'top' : pos.y,
                        'background-position' : bg.x + 'px ' + bg.y + 'px'
                    };
                if (useVML) {
                    VMLFillEle.position =  (bg.x / options.lensSize).toString() + ' ' + (bg.y / options.lensSize).toString();
                }
                lens.css(css);
            });
        });
    };
})(jQuery);