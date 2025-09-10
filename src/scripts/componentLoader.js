// Import raw HTML files at build time
import sidebarHTML from '../components/sidebar.html?raw';
import mobileButtonHTML from '../components/mobile_button.html?raw';

//Sidebar Navigation Loader
document.addEventListener('DOMContentLoaded', () => {
  const sidebarContainer = document.querySelector('#sidebarContainer');

  if (sidebarContainer) {
    sidebarContainer.innerHTML = sidebarHTML;

    // Re-initialize Alpine on dynamically added content
    Alpine.initTree(sidebarContainer);
  }
});

//Sidebar Mobile Button Loader
document.addEventListener('DOMContentLoaded', () => {
  const sidebarMobileButton = document.querySelector('#sidebarMobileButton');

  if (sidebarMobileButton) {
    sidebarMobileButton.innerHTML = mobileButtonHTML;

    // Re-initialize Alpine on dynamically added content
    Alpine.initTree(sidebarMobileButton);
  }
});
