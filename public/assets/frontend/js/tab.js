// Array of tab configurations, including IDs and absolute target URLs (relative to root)
const tabs = [
    { id: 'tab-home', url: '/'},
    { id: 'tab-event', url: '/my-event' },
    { id: 'tab-akun', url: '/akun' }
];

// Add event listeners for each tab to handle navigation
tabs.forEach(tab => {
    document.getElementById(tab.id).addEventListener('click', function() {
        // Navigate to the specified URL when the tab is clicked
        window.location.href = tab.url;
    });
});








// Function to highlight the active tab based on the current URL
// Function to highlight the active tab based on the current URL
function highlightActiveTab() {
    const currentUrl = window.location.pathname;

    // Ensure 'Home' tab stays active on /event-lock.html or /event-unlock.html
    // if (currentUrl.includes("/event-lock") ) {
    //     const homeTab = document.getElementById('home'); // Assuming 'home' is the ID of the Home tab
    //     if (homeTab) homeTab.classList.add('active');
    // }

    // if ( currentUrl.includes("/event-unlock")) {
    //     const homeTab = document.getElementById('my-event'); // Assuming 'home' is the ID of the Home tab
    //     if (homeTab) homeTab.classList.add('active');
    // }

    // Loop through all tabs to apply the 'active' class
    tabs.forEach(tab => {
        const element = document.getElementById(tab.id);

        // Check if the current URL matches this tab or any of its children
        // if (currentUrl.includes(tab.url) || (tab.children && tab.children.some(child => currentUrl.includes(child.url)))) {
            if (currentUrl.includes(tab.url) ) {

            element.classList.add('active');
        } else {
            element.classList.remove('active');
        }
    });
}

// Highlight the active tab on page load
window.onload = highlightActiveTab;
