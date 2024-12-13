
function modification() {
    document.getElementById('modification').classList.toggle('hidden');
}
const checkboxes = document.querySelectorAll('.checkbox');

checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
        checkboxes.forEach((cb) => {
            if (cb !== checkbox) cb.checked = false;
        });
    });
});

function closeAlert() {
    document.getElementById('alert-border-3').classList.add('hidden');
}