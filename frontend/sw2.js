var cacheName = 'sw-cache2';


self.addEventListener('install', function (event) {
    event.waitUntil(
        caches.open('sw-cache2').then(function (cache) {
            return cache.add(
                './',
                '/frontend/sw2.js',
                '/frontend/manifest.json',
                '/frontend/retrieve-data.php',
                '/frontend/index4.php',
                '/frontend/complaintform.pdf',
                '/frontend/feedback.php',
                '/frontend/faq.html', 
                '/frontend/index.html',
                '/frontend/js/scripts.js',
                '/frontend/js/fontawesome.js',
                '/frontend/js/jquery-3.3.1.slim.min.js',
                '/frontend/js/app.js',
                '/fontend/img/favicon.ico',
                '/frontend/img/favicon.png',
                '/frontend/img/phone.png',
                '/frontend/img/email.png',
                '/frontend/img/favicon.png',
                '/frontend/img/icon1.ico',
                '/frontend/img/icon2.ico',
                '/frontend/img/icon3.ico',
                '/frontend/img/icon4.ico',
                '/frontend/img/icon5.ico',
                '/frontend/img/icon6.ico',
                '/frontend/img/icon7.ico',
                '/frontend/img/icon8.ico',
                '/frontend/img/logo.png',
                '/frontend/img/smallogo.png',
                '/frontend/css/additional.css',
                '/frontend/css/bootstrap.css',
                '/frontend/css/bootstrap.css.map',
                '/frontend/css/bootstrap.min.css',
                '/frontend/css/bootstrap.min.css.map',
                '/frontend/css/bootstrap-grid.css',
                '/frontend/css/bootstrap-grid.css.map',
                '/frontend/css/bootstrap-grid.min.css',
                '/frontend/css/bootstrap-grid.min.css.map',
                '/frontend/css/bootstrap-reboot.css',
                '/frontend/css/bootstrap-reboot.css.map',
                '/frontend/css/bootstrap-reboot.min.css',
                '/frontend/css/bootsrap-reboot.min.css.map',
                '/frontend/css/cover.css',
                '/frontend/css/feedback.css',
                '/frontend/css/style2.css',
                '/frontend/css/style3.css',
                '/frontend/css/style.css'
               // all file which you need to cache at start - static caching 
            );
        })
    );
});

// To delete the old chache if name changed it will delete old chache 
self.addEventListener('activate', (event) => {
    console.info('Event: Activate');
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cache) => {
                    if (cache !== cacheName) {
                        return caches.delete(cache);
                    }
                })
            );
        })
    );
});

/* Start the service worker and cache files in filesToCache */
self.addEventListener('fetch', function (event) {
                event.respondWith(
                    // Cache first approch 
                    caches.open(cacheName).then(async function (cache) {
                        const response = await cache.match(event.request);
                        return response || fetch(event.request).then(function (response_1) {
                            cache.put(event.request, response_1.clone());
                            return response_1;
                        }).catch(() => {
                            return caches.match('/frontend/faq.html');
                        });
                    })
                );

});

self.addEventListener('sync', function (event) {
    if (event.tag == 'myFirstSync') {
        console.log("synching")

    }
    console.log("test");
});