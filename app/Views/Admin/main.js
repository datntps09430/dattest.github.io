//Service Worker Offline when you not have Internet
// Check Service Work are Supported
//Authur : Nguyen Tan Dat
// Date Build : 14-5-2020

if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker
        .register('../sw_cached_pages.js')
        .then(reg => console.log('Service Worker: Registered (Pages)'))
        .catch(err => console.log(`Service Worker: Error: ${err}`));
    });
  }
  