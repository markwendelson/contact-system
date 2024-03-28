
validate.extend(validate.validators.datetime, {
    parse: function(value, options) {
        return +moment.utc(value);
    },
    format: function(value, options) {
        var format = options.dateOnly ? "DD/MM/YYYY" : "DD/MM/YYYY";
        return moment.utc(value).format(format);
    }
});


function handleFormSubmit(form) {
    var errors = validate(form, constraints);
    showErrors(form, errors || {})

    if(errors) return false;

    return true;
}

function showErrors(form, errors) {
    _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
        if(input.name == '_token') return

        showErrorsForInput(input, errors && errors[input.name]);
    });
}

function showErrorsForInput(input, errors) {
    var formGroup = closestParent(input.parentNode, "form-group"),
        messages = formGroup.querySelector(".messages");
    resetFormGroup(formGroup);
    if (errors) {
        formGroup.classList.add("has-error");
        _.each(errors, function(error) {
            addError(messages, error, input);
        });
    } else {
        formGroup.classList.add("has-success");
    }
}

function closestParent(child, className) {
    if (!child || child == document) {
        return null;
    }
    if (child.classList.contains(className)) {
        return child;
    } else {
        return closestParent(child.parentNode, className);
    }
}

function resetFormGroup(formGroup) {
    formGroup.classList.remove("has-error");
    formGroup.classList.remove("has-success");
    _.each(formGroup.querySelectorAll(".text-danger"), function(el) {
        el.parentNode.removeChild(el);
    });
}

function addError(messages, error, input) {
    var block = document.createElement("p");
    block.classList.add("text-danger");
    block.classList.add("error");
    block.innerText = error;
    messages.appendChild(block);
    $(input).addClass("input-danger");
}
