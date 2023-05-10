<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Table V04</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="https://colorlib.com/etc/tb/Table_Fixed_Header/images/icons/favicon.ico">

    <meta name="robots" content="noindex, follow">
    <script defer="" referrerpolicy="origin" src="<?= get_template_directory_uri() ?>/js/s.js"></script>

    <!-- Inicio Wordpress Head-->
    <?php wp_head(); ?>
    <!-- Fim Wordpress Head-->

    <script nonce="496b7da1-1392-4894-99ea-5fbfd2ef7bcc">
        $(document).ready(function(w, d) {
                    ! function(dk, dl, dm, dn) {
                        dk[dm] = dk[dm] || {};
                        dk[dm].executed = [];
                        dk.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        dk.zaraz.q = [];
                        dk.zaraz._f = function(dp) {
                            return function() {
                                var dq = Array.prototype.slice.call(arguments);
                                dk.zaraz.q.push({
                                    m: dp,
                                    a: dq
                                })
                            }
                        };
                        for (const dr of ["track", "set", "debug"]) dk.zaraz[dr] = dk.zaraz._f(dr);
                        dk.zaraz.init = () => {
                            var ds = dl.getElementsByTagName(dn)[0],
                                dt = dl.createElement(dn),
                                du = dl.getElementsByTagName("title")[0];
                            du && (dk[dm].t = dl.getElementsByTagName("title")[0].text);
                            dk[dm].x = Math.random();
                            dk[dm].w = dk.screen.width;
                            dk[dm].h = dk.screen.height;
                            dk[dm].j = dk.innerHeight;
                            dk[dm].e = dk.innerWidth;
                            dk[dm].l = dk.location.href;
                            dk[dm].r = dl.referrer;
                            dk[dm].k = dk.screen.colorDepth;
                            dk[dm].n = dl.characterSet;
                            dk[dm].o = (new Date).getTimezoneOffset();
                            if (dk.dataLayer)
                                for (const dy of Object.entries(Object.entries(dataLayer).reduce(((dz, dA) => ({
                                        ...dz[1],
                                        ...dA[1]
                                    }))))) zaraz.set(dy[0], dy[1], {
                                    scope: "page"
                                });
                            dk[dm].q = [];
                            for (; dk.zaraz.q.length;) {
                                const dB = dk.zaraz.q.shift();
                                dk[dm].q.push(dB)
                            }
                            dt.defer = !0;
                            for (const dC of [localStorage, sessionStorage]) Object.keys(dC || {}).filter((dE => dE.startsWith("_zaraz_"))).forEach((dD => {
                                try {
                                    dk[dm]["z_" + dD.slice(7)] = JSON.parse(dC.getItem(dD))
                                } catch {
                                    dk[dm]["z_" + dD.slice(7)] = dC.getItem(dD)
                                }
                            }));
                            dt.referrerPolicy = "origin";
                            dt.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dk[dm])));
                            ds.parentNode.insertBefore(dt, ds)
                        };
                        ["complete", "interactive"].includes(dl.readyState) ? zaraz.init() : dk.addEventListener("DOMContentLoaded", zaraz.init)
                    };
                });
    </script>
</head>

<body>