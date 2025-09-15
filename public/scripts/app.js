
    // Mobile menu functionality
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    let sidebarOpen = false;

    function toggleSidebar() {
    sidebarOpen = !sidebarOpen;
    if (sidebarOpen) {
    sidebar.classList.remove('-translate-x-full');
    sidebarOverlay.classList.remove('hidden');
    menuIcon.classList.add('hidden');
    closeIcon.classList.remove('hidden');
} else {
    sidebar.classList.add('-translate-x-full');
    sidebarOverlay.classList.add('hidden');
    menuIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
}
}

    mobileMenuBtn.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', toggleSidebar);

    // Sidebar navigation
    const sidebarItems = document.querySelectorAll('.sidebar-item');
    sidebarItems.forEach(item => {

    item.addEventListener('click', function() {
        // Remove active class from all items
        sidebarItems.forEach(i => {
            i.classList.remove('active', 'bg-sidebar-accent', 'text-sidebar-accent-foreground');
            i.classList.add('text-sidebar-foreground', 'hover:bg-sidebar-primary', 'hover:text-sidebar-primary-foreground');
        });

        // Add active class to clicked item
        this.classList.add('active', 'bg-sidebar-accent', 'text-sidebar-accent-foreground');
        this.classList.remove('text-sidebar-foreground', 'hover:bg-sidebar-primary', 'hover:text-sidebar-primary-foreground');

        // Close mobile sidebar
        if (sidebarOpen) {
            toggleSidebar();
        }
    });
});



    function copyText() {
    const text = this.$refs.sampleCode.textContent;

    navigator.clipboard.writeText(text).then(() => {
    let copyButton = this.$refs.copyButton;
    const originalHtml = copyButton.innerHTML;
    console.log(originalHtml);

    copyButton.innerHTML = `
                        <i class="fas fa-check text-sm"></i>
                        Copied!
                    `;
    setTimeout(() => {
    copyButton.innerHTML = originalHtml;
}, 2000);
});
}
