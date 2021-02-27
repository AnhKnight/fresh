export default class {
    constructor() {

        window.admin.removeSubmitButtonOffsetOn([
            '#images', '#attributes', '#options', '#related_projects', '#up_sells', '#cross_sells', '#reviews',
        ]);

        $('#project-create-form, #project-edit-form').on('submit', this.submit);
    }

    submit(e) {
        e.preventDefault();
        e.currentTarget.submit();
    }
}
