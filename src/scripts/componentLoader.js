//Sidebar Navigation Loader
document.addEventListener('DOMContentLoaded', () => {
  const sidebarContainer = document.querySelector('#sidebarContainer');

  if (sidebarContainer) {
    fetch('./src/components/sidebar.html')
      .then(response => {
        if (!response.ok) throw new Error(`Failed to load sidebar: ${response.status}`);
        return response.text();
      })
      .then(html => {
        sidebarContainer.innerHTML = html;

        // Re-initialize Alpine on dynamically added content
        Alpine.initTree(sidebarContainer);
      })
      .catch(error => console.error('Sidebar loading failed:', error));
  }
});
