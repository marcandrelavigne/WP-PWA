if ('serviceWorker' in navigator) {
  navigator.serviceWorker
    .register('/wp-content/themes/Your-Theme/service-worker.js') // Must replace by your Theme's path
    .then(function(registration) {
      console.log(
        'Service Worker registration successful with scope: ',
        registration.scope
      );
    })
    .catch(function(err) {
      console.log('Service Worker registration failed: ', err);
    });
}
