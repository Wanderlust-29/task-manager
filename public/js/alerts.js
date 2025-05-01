document.addEventListener('DOMContentLoaded', function() {
    const alert = document.querySelector('.alert');
    if (alert) {
        setTimeout(() => {
            alert.classList.remove('show');
            alert.classList.add('fade');
            setTimeout(() => {
                alert.remove();
            }, 500);
        }, 3000);
    }
});