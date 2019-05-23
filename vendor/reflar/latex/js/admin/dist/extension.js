'use strict';

System.register('reflar/latex/components/LaTeXSettingsModal', ['flarum/components/SettingsModal', 'flarum/components/Alert', 'flarum/components/Switch'], function (_export, _context) {
    "use strict";

    var SettingsModal, Alert, Switch, LaTeXSettingsModal;
    return {
        setters: [function (_flarumComponentsSettingsModal) {
            SettingsModal = _flarumComponentsSettingsModal.default;
        }, function (_flarumComponentsAlert) {
            Alert = _flarumComponentsAlert.default;
        }, function (_flarumComponentsSwitch) {
            Switch = _flarumComponentsSwitch.default;
        }],
        execute: function () {
            LaTeXSettingsModal = function (_SettingsModal) {
                babelHelpers.inherits(LaTeXSettingsModal, _SettingsModal);

                function LaTeXSettingsModal() {
                    babelHelpers.classCallCheck(this, LaTeXSettingsModal);
                    return babelHelpers.possibleConstructorReturn(this, (LaTeXSettingsModal.__proto__ || Object.getPrototypeOf(LaTeXSettingsModal)).apply(this, arguments));
                }

                babelHelpers.createClass(LaTeXSettingsModal, [{
                    key: 'className',
                    value: function className() {
                        return 'LaTeXSettingsModal Modal--medium';
                    }
                }, {
                    key: 'title',
                    value: function title() {
                        return 'ReFlar LaTeX';
                    }
                }, {
                    key: 'form',
                    value: function form() {
                        return [m(
                            'div',
                            { className: 'Form-group' },
                            m(
                                'p',
                                null,
                                app.translator.trans('reflar-latex.admin.settings.prevent_formatting_description')
                            ),
                            m(
                                'fieldset',
                                null,
                                Alert.component({
                                    children: app.translator.trans('reflar-latex.admin.settings.prevent_formatting_warning'),
                                    dismissible: false
                                }),
                                m('br', null),
                                Switch.component({
                                    state: this.setting('reflar-latex.prevent_formatting')(),
                                    children: app.translator.trans('reflar-latex.admin.settings.prevent_formatting_label'),
                                    onchange: this.setting('reflar-latex.prevent_formatting')
                                })
                            )
                        )];
                    }
                }]);
                return LaTeXSettingsModal;
            }(SettingsModal);

            _export('default', LaTeXSettingsModal);
        }
    };
});;
'use strict';

System.register('reflar/latex/main', ['./components/LaTeXSettingsModal'], function (_export, _context) {
    "use strict";

    var LaTeXSettingsModal;
    return {
        setters: [function (_componentsLaTeXSettingsModal) {
            LaTeXSettingsModal = _componentsLaTeXSettingsModal.default;
        }],
        execute: function () {

            app.initializers.add('reflar/latex', function () {
                app.extensionSettings['reflar-latex'] = function () {
                    return app.modal.show(new LaTeXSettingsModal());
                };
            });
        }
    };
});