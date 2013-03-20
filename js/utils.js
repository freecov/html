define('utils', function () {
    var CovideUtils = function () {
        return {
            loadCss: function (url) {
                var link = document.createElement("link");
                    link.type = "text/css";
                    link.rel = "stylesheet";
                    link.href = url;
                    document.getElementsByTagName("head")[0].appendChild(link);
            },

            cookie: {
                get: function (key) {
                    var tmp = document.cookie.match((new RegExp(key + '=[a-zA-Z0-9.()=|%/]+($|;)', 'g')));
                    if (!tmp || !tmp[0]) {
                        return null;
                    } else {
                        return decodeURIComponent(tmp[0].substring(key.length + 1, tmp[0].length).replace(';', '')) || null;
                    }
                },

                set: function (key, value, ttl, path, domain, secure) {
                    var cookie = [key + '=' + encodeURIComponent(value),
                        'path=' + ((!path || path == '') ? '/' : path),
                        'domain=' + ((!domain || domain == '') ? window.location.hostname : domain)];

                    ttl && cookie.push(this.cookie.hoursToExpireDate(ttl));
                    secure && cookie.push('secure');
                    document.cookie = cookie.join(';');
                },

                unset: function (key, path, domain) {
                    path = (!path || typeof path != 'string') ? '' : path;
                    domain = (!domain || typeof domain != 'string') ? '' : domain;
                    if (this.cookie.get(key)) this.cookie.set(key, '', 'Thu, 01-Jan-70 00:00:01 GMT', path, domain);
                },

                hoursToExpireDate: function (ttl) {
                    if (parseInt(ttl) == 'NaN') {
                        return '';
                    } else {
                        var now = new Date();
                        now.setTime(now.getTime() + (parseInt(ttl) * 60 * 60 * 1000));
                        return now.toGMTString();
                    }
                }
            }
        }
    }

    window.CovideUtils = new CovideUtils();
    window.translate = window.CovideUtils.translate;
});