let cookie_path = { "cookiePath": "accessibility" };
let fonts = {
    '.lab-link-default': 'fontfamily_default',
	'.lab-font-inter': 'fontfamily_opensans',
    '.lab-font-opendyslexic': 'fontfamily_opendyslexic'
};

function setFont(fnt) {
    Cookies.set('fontfamily', fonts['.' + fnt], { expires: 7, path: cookie_path.cookiePath });
    jQuery('body').removeClass(Object.values(fonts).join(" ")).addClass(fonts['.' + fnt]);
}


function formatter(value, settings) {
    return value.toFixed(settings.decimals);
}

function onComplete(value) {
    return value;
}

jQuery(document).ready(function() {
    let ReadableFontButton = jQuery('.lab-font-readable');
    let font_normal = jQuery('.lab-font-normal');
    let font_larger = jQuery('.lab-font-larger');
    let font_smaller = jQuery('.lab-font-smaller');
    let link_underline = jQuery('.lab-link-underline');
    let reset_all = jQuery('.lab-reset');
    let body = jQuery('body');
	let accessibility_button = jQuery('#accessibility_settings_open_close');

    body.toggleClass('font-readable', Cookies.get('readablefont') === 'yes');
    body.toggleClass('link-underline', Cookies.get('underline') === 'yes');

    let fsCount = 100;
    let cookieFont = Cookies.get('lab-font-size');

    if (cookieFont) {
        fsCount = parseInt(cookieFont);
        if (!body.hasClass('fsize' + fsCount)) {
            body.addClass('fsize' + fsCount);
        }
    } else {
        body.removeClass('fsize70 fsize80 fsize90 fsize100 fsize110 fsize120 fsize130');
    }

    font_larger.click(function(event) {
        event.preventDefault();
        if (fsCount < 130) {
            body.removeClass('fsize' + fsCount);
            fsCount = fsCount + 10;
            body.addClass('fsize' + fsCount);
            Cookies.set('lab-font-size', fsCount, { expires: 7, path: cookie_path.cookiePath });
        }
    });

    font_smaller.click(function(event) {
        event.preventDefault();
        if (fsCount > 70) {
            body.removeClass('fsize' + fsCount);
            fsCount = fsCount - 10;
            body.addClass('fsize' + fsCount);
            Cookies.set('lab-font-size', fsCount, { expires: 7, path: cookie_path.cookiePath });
        }
    });

    font_normal.click(function(event) {
        event.preventDefault();
        fsCount = 100;
        body.removeClass('fsize70 fsize80 fsize90 fsize100 fsize110 fsize120 fsize130 font-readable link-underline');
        Cookies.remove('lab-font-size', { path: cookie_path.cookiePath });
        Cookies.remove('readablefont', { path: cookie_path.cookiePath });
        Cookies.remove('underline', { path: cookie_path.cookiePath });
    });

    ReadableFontButton.click(function(event) {
        event.preventDefault();
        Cookies.set('readablefont', 'yes', { expires: 7, path: cookie_path.cookiePath });
        if (!body.hasClass('font-readable')) {
            body.addClass('font-readable');
        }

        jQuery(window).trigger('resize');
    });

    link_underline.click(function(event) {
        event.preventDefault();
        Cookies.set('underline', 'yes', { expires: 7, path: cookie_path.cookiePath });
        if (!body.hasClass('link-underline')) {
            body.addClass('link-underline');
        }
    });
	accessibility_button.click(function(event) {
		console.log('click accessibility_button');
		body.toggleClass('accessibility-menu-open');
	});

    reset_all.click(function() {
        body.removeClass('fsize70 fsize80 fsize90 fsize100 fsize110 fsize120 fsize130 font-readable link-underline fontfamily_inter fontfamily_andika fontfamily_fsme fontfamily_tiresias fontfamily_opendyslexic');
        fsCount = 100;
        Cookies.remove('lab-font-size', { path: cookie_path.cookiePath });
        Cookies.remove('readablefont', { path: cookie_path.cookiePath });
        Cookies.remove('underline', { path: cookie_path.cookiePath });
        Cookies.remove('fontfamily', { path: cookie_path.cookiePath });
    });

    jQuery(Object.keys(fonts).join(",") + "").click(function(event) {
        event.preventDefault();
        setFont(this.className);
    });

    body.addClass(Cookies.get('fontfamily'));

});

(function($) {
    "use strict";

    $.fn.countTo = function(options) {
        options = options || {};

        return $(this).each(function() {
            // set options for current element
            let settings = $.extend({}, $.fn.countTo.defaults, {
                from: $(this).data('from'),
                to: $(this).data('to'),
                speed: $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals: $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            let loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            let self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }

            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                let formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue + "+");
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0, // the number the element should start at
        to: 0, // the number the element should end at
        speed: 1000, // how long it should take to count between the target numbers
        refreshInterval: 100, // how often the element should be updated
        decimals: 0, // the number of decimal places to show
        formatter: formatter, // handler for formatting the value before rendering
        onUpdate: null, // callback method for every time the element is updated
        onComplete: onComplete // callback method for when the element finishes updating
    };

})(jQuery);
