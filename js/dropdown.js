document.addEventListener('DOMContentLoaded', function() {
    const dropdownContainers = document.querySelectorAll('.dropdownContainer');

    // Function to toggle dropdown visibility
    function toggleDropdown(dropdown, visibility = null) {
        if (visibility !== null) {
            dropdown.classList.toggle('show', visibility);
        } else {
            dropdown.classList.toggle('show');
        }
    }

    // Handle dropdown and radio changes
    dropdownContainers.forEach(container => {
        const input = container.querySelector('.dropdownInput');
        const dropdownContent = container.querySelector('.dropdownContent');

        input.addEventListener('click', function() {
            // Toggle the current dropdown
            toggleDropdown(dropdownContent);
        });

        dropdownContent.addEventListener('change', function(event) {
            if (event.target.type === 'radio') {
                input.value = event.target.nextSibling.textContent.trim();
                toggleDropdown(dropdownContent, false);
            }
        });
    });

    // Close dropdowns when clicking outside
    window.addEventListener('click', function(event) {
        dropdownContainers.forEach(container => {
            if (!container.contains(event.target)) {
                const dropdownContent = container.querySelector('.dropdownContent');
                toggleDropdown(dropdownContent, false);
            }
        });
    });
});