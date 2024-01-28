define('custom:find-contacts-custom', ['action-handler'], function (Dep) {

    return Dep.extend({

        actionFindContactsCustom: function (data, e) {
            const email = "test@test.cz";


            Espo.Ajax
                .getRequest('Lead/' + this.view.model.id)
                .then(response => {
                    const emailAddress = response && response.emailAddress;

                    console.log(emailAddress);
                });

            Espo.Ajax.getRequest('Autocrm').then(response => {
                console.log(response);
            })
        },



        initTest: function () {
            this.controlActionVisibility();

            this.view.listenTo(
                this.view.model,
                'change:status',
                this.controlActionVisibility.bind(this)
            );
        },

        controlActionVisibility: function () {
            if (~['Converted', 'Dead', 'Recycled'].indexOf(this.view.model.get('status'))) {
                this.view.hideActionItem('findContactsCustom');

                return;
            }

            this.view.showActionItem('findContactsCustom');
        },
    });
});
