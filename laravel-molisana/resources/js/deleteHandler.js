const deleteFormElements = document.querySelectorAll('form.form-deleter');

deleteFormElements.forEach((formElement) => {
    formElement.addEventListener('submit', function (event) {
        event.preventDefault();
        const formElementName = formElement.getAttribute('data-element-name');
        const confirmPopUp = window.confirm(`Are you sure you want to delete ${formElementName}`);
        if (confirmPopUp) this.submit();
    } )
});