const STORAGE_NAME = 'USER_INPUT';

const elements = Array.from(
    document.getElementsByTagName('input'))
    .concat(Array.from(document.getElementsByTagName('select')));

const submitButton = document.querySelector('#submit')

const defineInput = (obj, name, value) => {
    return Object.defineProperty(obj, name, {value: value, configurable: true, enumerable: true});
}

let data = localStorage.getItem(STORAGE_NAME);

if (data) {
    data = JSON.parse(data);
    for (const [key, value] of Object.entries(data)) {
        const targets = elements.filter(element => element.name === key);
        if (targets.length === 1) {
            targets[0].value = value;
        } else if (targets.length > 1) {
            targets.forEach(element => {
                if (element.value === value ) {
                    element.checked = true;
                }
            })
        }
    }
} else {
    data = {}
    elements.forEach(input => {
        data = defineInput(data, input.name.toString(), input.value);
    });
    localStorage.setItem(STORAGE_NAME, JSON.stringify(data));
}

elements.forEach(element => {
    element.addEventListener('input', () => {
        data = defineInput(data, element.name.toString(), element.value);
        localStorage.setItem(STORAGE_NAME, JSON.stringify(data));
        console.log(data)
    })
})

submitButton.addEventListener('click', () => {
    localStorage.removeItem(STORAGE_NAME)
})
