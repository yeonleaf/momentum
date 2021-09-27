function adddiv(alpha) {
    let input = document.createElement('input');
    input.type = 'checkbox';
    input.name = 'check';
    input.value = alpha;
    document.getElementById('checkbox').appendChild(input);
}