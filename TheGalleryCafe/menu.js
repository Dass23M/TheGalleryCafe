document.getElementById('food-search').addEventListener('input', function () {
    let searchValue = this.value.toLowerCase();
    let sections = {
        'sri lankan': '#sl',
        'chinese': '#chinese',
        'italian': '#italian',
        'indian': '#indian'
    };

    for (let key in sections) {
        if (key.startsWith(searchValue)) {
            document.querySelector(sections[key]).scrollIntoView({ behavior: 'smooth' });
            break;
        }
    }
});
