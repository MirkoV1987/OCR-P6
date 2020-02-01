<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modern-business/js/jqBootstrapValidation.js */
class __TwigTemplate_f6b9d41a2b9c85bf41bc5f4b403d71723b9a43aaaa3e020925752e29dacd436d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/js/jqBootstrapValidation.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/js/jqBootstrapValidation.js"));

        // line 1
        echo "/* jqBootstrapValidation
 * A plugin for automating validation on Twitter Bootstrap formatted forms.
 *
 * v1.3.6
 *
 * License: MIT <http://opensource.org/licenses/mit-license.php> - see LICENSE file
 *
 * http://ReactiveRaven.github.com/jqBootstrapValidation/
 */

(function( \$ ){

\tvar createdElements = [];

\tvar defaults = {
\t\toptions: {
\t\t\tprependExistingHelpBlock: false,
\t\t\tsniffHtml: true, // sniff for 'required', 'maxlength', etc
\t\t\tpreventSubmit: true, // stop the form submit event from firing if validation fails
\t\t\tsubmitError: false, // function called if there is an error when trying to submit
\t\t\tsubmitSuccess: false, // function called just before a successful submit event is sent to the server
            semanticallyStrict: false, // set to true to tidy up generated HTML output
\t\t\tautoAdd: {
\t\t\t\thelpBlocks: true
\t\t\t},
            filter: function () {
                // return \$(this).is(\":visible\"); // only validate elements you can see
                return true; // validate everything
            }
\t\t},
    methods: {
      init : function( options ) {

        var settings = \$.extend(true, {}, defaults);

        settings.options = \$.extend(true, settings.options, options);

        var \$siblingElements = this;

        var uniqueForms = \$.unique(
          \$siblingElements.map( function () {
            return \$(this).parents(\"form\")[0];
          }).toArray()
        );

        \$(uniqueForms).bind(\"submit\", function (e) {
          var \$form = \$(this);
          var warningsFound = 0;
          var \$inputs = \$form.find(\"input,textarea,select\").not(\"[type=submit],[type=image]\").filter(settings.options.filter);
          \$inputs.trigger(\"submit.validation\").trigger(\"validationLostFocus.validation\");

          \$inputs.each(function (i, el) {
            var \$this = \$(el),
              \$controlGroup = \$this.parents(\".control-group\").first();
            if (
              \$controlGroup.hasClass(\"has-warning\")
            ) {
              \$controlGroup.removeClass(\"has-warning\").addClass(\"has-error\");
              warningsFound++;
            }
          });

          \$inputs.trigger(\"validationLostFocus.validation\");

          if (warningsFound) {
            if (settings.options.preventSubmit) {
              e.preventDefault();
            }
            \$form.addClass(\"has-error\");
            if (\$.isFunction(settings.options.submitError)) {
              settings.options.submitError(\$form, e, \$inputs.jqBootstrapValidation(\"collectErrors\", true));
            }
          } else {
            \$form.removeClass(\"has-error\");
            if (\$.isFunction(settings.options.submitSuccess)) {
              settings.options.submitSuccess(\$form, e);
            }
          }
        });

        return this.each(function(){

          // Get references to everything we're interested in
          var \$this = \$(this),
            \$controlGroup = \$this.parents(\".control-group\").first(),
            \$helpBlock = \$controlGroup.find(\".help-block\").first(),
            \$form = \$this.parents(\"form\").first(),
            validatorNames = [];

          // create message container if not exists
          if (!\$helpBlock.length && settings.options.autoAdd && settings.options.autoAdd.helpBlocks) {
              \$helpBlock = \$('<div class=\"help-block\" />');
              \$controlGroup.find('.controls').append(\$helpBlock);
\t\t\t\t\t\t\tcreatedElements.push(\$helpBlock[0]);
          }

          // =============================================================
          //                                     SNIFF HTML FOR VALIDATORS
          // =============================================================

          // *snort sniff snuffle*

          if (settings.options.sniffHtml) {
            var message = \"\";
            // ---------------------------------------------------------
            //                                                   PATTERN
            // ---------------------------------------------------------
            if (\$this.attr(\"pattern\") !== undefined) {
              message = \"Not in the expected format<!-- data-validation-pattern-message to override -->\";
              if (\$this.data(\"validationPatternMessage\")) {
                message = \$this.data(\"validationPatternMessage\");
              }
              \$this.data(\"validationPatternMessage\", message);
              \$this.data(\"validationPatternRegex\", \$this.attr(\"pattern\"));
            }
            // ---------------------------------------------------------
            //                                                       MAX
            // ---------------------------------------------------------
            if (\$this.attr(\"max\") !== undefined || \$this.attr(\"aria-valuemax\") !== undefined) {
              var max = (\$this.attr(\"max\") !== undefined ? \$this.attr(\"max\") : \$this.attr(\"aria-valuemax\"));
              message = \"Too high: Maximum of '\" + max + \"'<!-- data-validation-max-message to override -->\";
              if (\$this.data(\"validationMaxMessage\")) {
                message = \$this.data(\"validationMaxMessage\");
              }
              \$this.data(\"validationMaxMessage\", message);
              \$this.data(\"validationMaxMax\", max);
            }
            // ---------------------------------------------------------
            //                                                       MIN
            // ---------------------------------------------------------
            if (\$this.attr(\"min\") !== undefined || \$this.attr(\"aria-valuemin\") !== undefined) {
              var min = (\$this.attr(\"min\") !== undefined ? \$this.attr(\"min\") : \$this.attr(\"aria-valuemin\"));
              message = \"Too low: Minimum of '\" + min + \"'<!-- data-validation-min-message to override -->\";
              if (\$this.data(\"validationMinMessage\")) {
                message = \$this.data(\"validationMinMessage\");
              }
              \$this.data(\"validationMinMessage\", message);
              \$this.data(\"validationMinMin\", min);
            }
            // ---------------------------------------------------------
            //                                                 MAXLENGTH
            // ---------------------------------------------------------
            if (\$this.attr(\"maxlength\") !== undefined) {
              message = \"Too long: Maximum of '\" + \$this.attr(\"maxlength\") + \"' characters<!-- data-validation-maxlength-message to override -->\";
              if (\$this.data(\"validationMaxlengthMessage\")) {
                message = \$this.data(\"validationMaxlengthMessage\");
              }
              \$this.data(\"validationMaxlengthMessage\", message);
              \$this.data(\"validationMaxlengthMaxlength\", \$this.attr(\"maxlength\"));
            }
            // ---------------------------------------------------------
            //                                                 MINLENGTH
            // ---------------------------------------------------------
            if (\$this.attr(\"minlength\") !== undefined) {
              message = \"Too short: Minimum of '\" + \$this.attr(\"minlength\") + \"' characters<!-- data-validation-minlength-message to override -->\";
              if (\$this.data(\"validationMinlengthMessage\")) {
                message = \$this.data(\"validationMinlengthMessage\");
              }
              \$this.data(\"validationMinlengthMessage\", message);
              \$this.data(\"validationMinlengthMinlength\", \$this.attr(\"minlength\"));
            }
            // ---------------------------------------------------------
            //                                                  REQUIRED
            // ---------------------------------------------------------
            if (\$this.attr(\"required\") !== undefined || \$this.attr(\"aria-required\") !== undefined) {
              message = settings.builtInValidators.required.message;
              if (\$this.data(\"validationRequiredMessage\")) {
                message = \$this.data(\"validationRequiredMessage\");
              }
              \$this.data(\"validationRequiredMessage\", message);
            }
            // ---------------------------------------------------------
            //                                                    NUMBER
            // ---------------------------------------------------------
            if (\$this.attr(\"type\") !== undefined && \$this.attr(\"type\").toLowerCase() === \"number\") {
              message = settings.builtInValidators.number.message;
              if (\$this.data(\"validationNumberMessage\")) {
                message = \$this.data(\"validationNumberMessage\");
              }
              \$this.data(\"validationNumberMessage\", message);
            }
            // ---------------------------------------------------------
            //                                                     EMAIL
            // ---------------------------------------------------------
            if (\$this.attr(\"type\") !== undefined && \$this.attr(\"type\").toLowerCase() === \"email\") {
              message = \"Not a valid email address<!-- data-validator-validemail-message to override -->\";
              if (\$this.data(\"validationValidemailMessage\")) {
                message = \$this.data(\"validationValidemailMessage\");
              } else if (\$this.data(\"validationEmailMessage\")) {
                message = \$this.data(\"validationEmailMessage\");
              }
              \$this.data(\"validationValidemailMessage\", message);
            }
            // ---------------------------------------------------------
            //                                                MINCHECKED
            // ---------------------------------------------------------
            if (\$this.attr(\"minchecked\") !== undefined) {
              message = \"Not enough options checked; Minimum of '\" + \$this.attr(\"minchecked\") + \"' required<!-- data-validation-minchecked-message to override -->\";
              if (\$this.data(\"validationMincheckedMessage\")) {
                message = \$this.data(\"validationMincheckedMessage\");
              }
              \$this.data(\"validationMincheckedMessage\", message);
              \$this.data(\"validationMincheckedMinchecked\", \$this.attr(\"minchecked\"));
            }
            // ---------------------------------------------------------
            //                                                MAXCHECKED
            // ---------------------------------------------------------
            if (\$this.attr(\"maxchecked\") !== undefined) {
              message = \"Too many options checked; Maximum of '\" + \$this.attr(\"maxchecked\") + \"' required<!-- data-validation-maxchecked-message to override -->\";
              if (\$this.data(\"validationMaxcheckedMessage\")) {
                message = \$this.data(\"validationMaxcheckedMessage\");
              }
              \$this.data(\"validationMaxcheckedMessage\", message);
              \$this.data(\"validationMaxcheckedMaxchecked\", \$this.attr(\"maxchecked\"));
            }
          }

          // =============================================================
          //                                       COLLECT VALIDATOR NAMES
          // =============================================================

          // Get named validators
          if (\$this.data(\"validation\") !== undefined) {
            validatorNames = \$this.data(\"validation\").split(\",\");
          }

          // Get extra ones defined on the element's data attributes
          \$.each(\$this.data(), function (i, el) {
            var parts = i.replace(/([A-Z])/g, \",\$1\").split(\",\");
            if (parts[0] === \"validation\" && parts[1]) {
              validatorNames.push(parts[1]);
            }
          });

          // =============================================================
          //                                     NORMALISE VALIDATOR NAMES
          // =============================================================

          var validatorNamesToInspect = validatorNames;
          var newValidatorNamesToInspect = [];

          do // repeatedly expand 'shortcut' validators into their real validators
          {
            // Uppercase only the first letter of each name
            \$.each(validatorNames, function (i, el) {
              validatorNames[i] = formatValidatorName(el);
            });

            // Remove duplicate validator names
            validatorNames = \$.unique(validatorNames);

            // Pull out the new validator names from each shortcut
            newValidatorNamesToInspect = [];
            \$.each(validatorNamesToInspect, function(i, el) {
              if (\$this.data(\"validation\" + el + \"Shortcut\") !== undefined) {
                // Are these custom validators?
                // Pull them out!
                \$.each(\$this.data(\"validation\" + el + \"Shortcut\").split(\",\"), function(i2, el2) {
                  newValidatorNamesToInspect.push(el2);
                });
              } else if (settings.builtInValidators[el.toLowerCase()]) {
                // Is this a recognised built-in?
                // Pull it out!
                var validator = settings.builtInValidators[el.toLowerCase()];
                if (validator.type.toLowerCase() === \"shortcut\") {
                  \$.each(validator.shortcut.split(\",\"), function (i, el) {
                    el = formatValidatorName(el);
                    newValidatorNamesToInspect.push(el);
                    validatorNames.push(el);
                  });
                }
              }
            });

            validatorNamesToInspect = newValidatorNamesToInspect;

          } while (validatorNamesToInspect.length > 0)

          // =============================================================
          //                                       SET UP VALIDATOR ARRAYS
          // =============================================================

          var validators = {};

          \$.each(validatorNames, function (i, el) {
            // Set up the 'override' message
            var message = \$this.data(\"validation\" + el + \"Message\");
            var hasOverrideMessage = (message !== undefined);
            var foundValidator = false;
            message =
              (
                message
                  ? message
                  : \"'\" + el + \"' validation failed <!-- Add attribute 'data-validation-\" + el.toLowerCase() + \"-message' to input to change this message -->\"
              )
            ;

            \$.each(
              settings.validatorTypes,
              function (validatorType, validatorTemplate) {
                if (validators[validatorType] === undefined) {
                  validators[validatorType] = [];
                }
                if (!foundValidator && \$this.data(\"validation\" + el + formatValidatorName(validatorTemplate.name)) !== undefined) {
                  validators[validatorType].push(
                    \$.extend(
                      true,
                      {
                        name: formatValidatorName(validatorTemplate.name),
                        message: message
                      },
                      validatorTemplate.init(\$this, el)
                    )
                  );
                  foundValidator = true;
                }
              }
            );

            if (!foundValidator && settings.builtInValidators[el.toLowerCase()]) {

              var validator = \$.extend(true, {}, settings.builtInValidators[el.toLowerCase()]);
              if (hasOverrideMessage) {
                validator.message = message;
              }
              var validatorType = validator.type.toLowerCase();

              if (validatorType === \"shortcut\") {
                foundValidator = true;
              } else {
                \$.each(
                  settings.validatorTypes,
                  function (validatorTemplateType, validatorTemplate) {
                    if (validators[validatorTemplateType] === undefined) {
                      validators[validatorTemplateType] = [];
                    }
                    if (!foundValidator && validatorType === validatorTemplateType.toLowerCase()) {
                      \$this.data(\"validation\" + el + formatValidatorName(validatorTemplate.name), validator[validatorTemplate.name.toLowerCase()]);
                      validators[validatorType].push(
                        \$.extend(
                          validator,
                          validatorTemplate.init(\$this, el)
                        )
                      );
                      foundValidator = true;
                    }
                  }
                );
              }
            }

            if (! foundValidator) {
              \$.error(\"Cannot find validation info for '\" + el + \"'\");
            }
          });

          // =============================================================
          //                                         STORE FALLBACK VALUES
          // =============================================================

          \$helpBlock.data(
            \"original-contents\",
            (
              \$helpBlock.data(\"original-contents\")
                ? \$helpBlock.data(\"original-contents\")
                : \$helpBlock.html()
            )
          );

          \$helpBlock.data(
            \"original-role\",
            (
              \$helpBlock.data(\"original-role\")
                ? \$helpBlock.data(\"original-role\")
                : \$helpBlock.attr(\"role\")
            )
          );

          \$controlGroup.data(
            \"original-classes\",
            (
              \$controlGroup.data(\"original-clases\")
                ? \$controlGroup.data(\"original-classes\")
                : \$controlGroup.attr(\"class\")
            )
          );

          \$this.data(
            \"original-aria-invalid\",
            (
              \$this.data(\"original-aria-invalid\")
                ? \$this.data(\"original-aria-invalid\")
                : \$this.attr(\"aria-invalid\")
            )
          );

          // =============================================================
          //                                                    VALIDATION
          // =============================================================

          \$this.bind(
            \"validation.validation\",
            function (event, params) {

              var value = getValue(\$this);

              // Get a list of the errors to apply
              var errorsFound = [];

              \$.each(validators, function (validatorType, validatorTypeArray) {
                if (value || value.length || (params && params.includeEmpty) || (!!settings.validatorTypes[validatorType].blockSubmit && params && !!params.submitting)) {
                  \$.each(validatorTypeArray, function (i, validator) {
                    if (settings.validatorTypes[validatorType].validate(\$this, value, validator)) {
                      errorsFound.push(validator.message);
                    }
                  });
                }
              });

              return errorsFound;
            }
          );

          \$this.bind(
            \"getValidators.validation\",
            function () {
              return validators;
            }
          );

          // =============================================================
          //                                             WATCH FOR CHANGES
          // =============================================================
          \$this.bind(
            \"submit.validation\",
            function () {
              return \$this.triggerHandler(\"change.validation\", {submitting: true});
            }
          );
          \$this.bind(
            [
              \"keyup\",
              \"focus\",
              \"blur\",
              \"click\",
              \"keydown\",
              \"keypress\",
              \"change\"
            ].join(\".validation \") + \".validation\",
            function (e, params) {

              var value = getValue(\$this);

              var errorsFound = [];

              \$controlGroup.find(\"input,textarea,select\").each(function (i, el) {
                var oldCount = errorsFound.length;
                \$.each(\$(el).triggerHandler(\"validation.validation\", params), function (j, message) {
                  errorsFound.push(message);
                });
                if (errorsFound.length > oldCount) {
                  \$(el).attr(\"aria-invalid\", \"true\");
                } else {
                  var original = \$this.data(\"original-aria-invalid\");
                  \$(el).attr(\"aria-invalid\", (original !== undefined ? original : false));
                }
              });

              \$form.find(\"input,select,textarea\").not(\$this).not(\"[name=\\\"\" + \$this.attr(\"name\") + \"\\\"]\").trigger(\"validationLostFocus.validation\");

              errorsFound = \$.unique(errorsFound.sort());

              // Were there any errors?
              if (errorsFound.length) {
                // Better flag it up as a warning.
                \$controlGroup.removeClass(\"has-success has-error\").addClass(\"has-warning\");

                // How many errors did we find?
                if (settings.options.semanticallyStrict && errorsFound.length === 1) {
                  // Only one? Being strict? Just output it.
                  \$helpBlock.html(errorsFound[0] + 
                    ( settings.options.prependExistingHelpBlock ? \$helpBlock.data(\"original-contents\") : \"\" ));
                } else {
                  // Multiple? Being sloppy? Glue them together into an UL.
                  \$helpBlock.html(\"<ul role=\\\"alert\\\"><li>\" + errorsFound.join(\"</li><li>\") + \"</li></ul>\" +
                    ( settings.options.prependExistingHelpBlock ? \$helpBlock.data(\"original-contents\") : \"\" ));
                }
              } else {
                \$controlGroup.removeClass(\"has-warning has-error has-success\");
                if (value.length > 0) {
                  \$controlGroup.addClass(\"has-success\");
                }
                \$helpBlock.html(\$helpBlock.data(\"original-contents\"));
              }

              if (e.type === \"blur\") {
                \$controlGroup.removeClass(\"has-success\");
              }
            }
          );
          \$this.bind(\"validationLostFocus.validation\", function () {
            \$controlGroup.removeClass(\"has-success\");
          });
        });
      },
      destroy : function( ) {

        return this.each(
          function() {

            var
              \$this = \$(this),
              \$controlGroup = \$this.parents(\".control-group\").first(),
              \$helpBlock = \$controlGroup.find(\".help-block\").first();

            // remove our events
            \$this.unbind('.validation'); // events are namespaced.
            // reset help text
            \$helpBlock.html(\$helpBlock.data(\"original-contents\"));
            // reset classes
            \$controlGroup.attr(\"class\", \$controlGroup.data(\"original-classes\"));
            // reset aria
            \$this.attr(\"aria-invalid\", \$this.data(\"original-aria-invalid\"));
            // reset role
            \$helpBlock.attr(\"role\", \$this.data(\"original-role\"));
\t\t\t\t\t\t// remove all elements we created
\t\t\t\t\t\tif (createdElements.indexOf(\$helpBlock[0]) > -1) {
\t\t\t\t\t\t\t\$helpBlock.remove();
\t\t\t\t\t\t}

          }
        );

      },
      collectErrors : function(includeEmpty) {

        var errorMessages = {};
        this.each(function (i, el) {
          var \$el = \$(el);
          var name = \$el.attr(\"name\");
          var errors = \$el.triggerHandler(\"validation.validation\", {includeEmpty: true});
          errorMessages[name] = \$.extend(true, errors, errorMessages[name]);
        });

        \$.each(errorMessages, function (i, el) {
          if (el.length === 0) {
            delete errorMessages[i];
          }
        });

        return errorMessages;

      },
      hasErrors: function() {

        var errorMessages = [];

        this.each(function (i, el) {
          errorMessages = errorMessages.concat(
            \$(el).triggerHandler(\"getValidators.validation\") ? \$(el).triggerHandler(\"validation.validation\", {submitting: true}) : []
          );
        });

        return (errorMessages.length > 0);
      },
      override : function (newDefaults) {
        defaults = \$.extend(true, defaults, newDefaults);
      }
    },
\t\tvalidatorTypes: {
      callback: {
        name: \"callback\",
        init: function (\$this, name) {
          return {
            validatorName: name,
            callback: \$this.data(\"validation\" + name + \"Callback\"),
            lastValue: \$this.val(),
            lastValid: true,
            lastFinished: true
          };
        },
        validate: function (\$this, value, validator) {
          if (validator.lastValue === value && validator.lastFinished) {
            return !validator.lastValid;
          }

          if (validator.lastFinished === true)
          {
            validator.lastValue = value;
            validator.lastValid = true;
            validator.lastFinished = false;

            var rrjqbvValidator = validator;
            var rrjqbvThis = \$this;
            executeFunctionByName(
              validator.callback,
              window,
              \$this,
              value,
              function (data) {
                if (rrjqbvValidator.lastValue === data.value) {
                  rrjqbvValidator.lastValid = data.valid;
                  if (data.message) {
                    rrjqbvValidator.message = data.message;
                  }
                  rrjqbvValidator.lastFinished = true;
                  rrjqbvThis.data(\"validation\" + rrjqbvValidator.validatorName + \"Message\", rrjqbvValidator.message);
                  // Timeout is set to avoid problems with the events being considered 'already fired'
                  setTimeout(function () {
                    rrjqbvThis.trigger(\"change.validation\");
                  }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                }
              }
            );
          }

          return false;

        }
      },
      ajax: {
        name: \"ajax\",
        init: function (\$this, name) {
          return {
            validatorName: name,
            url: \$this.data(\"validation\" + name + \"Ajax\"),
            lastValue: \$this.val(),
            lastValid: true,
            lastFinished: true
          };
        },
        validate: function (\$this, value, validator) {
          if (\"\"+validator.lastValue === \"\"+value && validator.lastFinished === true) {
            return validator.lastValid === false;
          }

          if (validator.lastFinished === true)
          {
            validator.lastValue = value;
            validator.lastValid = true;
            validator.lastFinished = false;
            \$.ajax({
              url: validator.url,
              data: \"value=\" + value + \"&field=\" + \$this.attr(\"name\"),
              dataType: \"json\",
              success: function (data) {
                if (\"\"+validator.lastValue === \"\"+data.value) {
                  validator.lastValid = !!(data.valid);
                  if (data.message) {
                    validator.message = data.message;
                  }
                  validator.lastFinished = true;
                  \$this.data(\"validation\" + validator.validatorName + \"Message\", validator.message);
                  // Timeout is set to avoid problems with the events being considered 'already fired'
                  setTimeout(function () {
                    \$this.trigger(\"change.validation\");
                  }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                }
              },
              failure: function () {
                validator.lastValid = true;
                validator.message = \"ajax call failed\";
                validator.lastFinished = true;
                \$this.data(\"validation\" + validator.validatorName + \"Message\", validator.message);
                // Timeout is set to avoid problems with the events being considered 'already fired'
                setTimeout(function () {
                  \$this.trigger(\"change.validation\");
                }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
              }
            });
          }

          return false;

        }
      },
\t\t\tregex: {
\t\t\t\tname: \"regex\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {regex: regexFromString(\$this.data(\"validation\" + name + \"Regex\"))};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (!validator.regex.test(value) && ! validator.negative)
\t\t\t\t\t\t|| (validator.regex.test(value) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\trequired: {
\t\t\t\tname: \"required\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn !!(value.length === 0  && ! validator.negative)
\t\t\t\t\t\t|| !!(value.length > 0 && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t},
\t\t\tmatch: {
\t\t\t\tname: \"match\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\tvar element = \$this.parents(\"form\").first().find(\"[name=\\\"\" + \$this.data(\"validation\" + name + \"Match\") + \"\\\"]\").first();
\t\t\t\t\telement.bind(\"validation.validation\", function () {
\t\t\t\t\t\t\$this.trigger(\"change.validation\", {submitting: true});
\t\t\t\t\t});
\t\t\t\t\treturn {\"element\": element};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (value !== validator.element.val() && ! validator.negative)
\t\t\t\t\t\t|| (value === validator.element.val() && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t},
\t\t\tmax: {
\t\t\t\tname: \"max\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {max: \$this.data(\"validation\" + name + \"Max\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (parseFloat(value, 10) > parseFloat(validator.max, 10) && ! validator.negative)
\t\t\t\t\t\t|| (parseFloat(value, 10) <= parseFloat(validator.max, 10) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tmin: {
\t\t\t\tname: \"min\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {min: \$this.data(\"validation\" + name + \"Min\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (parseFloat(value) < parseFloat(validator.min) && ! validator.negative)
\t\t\t\t\t\t|| (parseFloat(value) >= parseFloat(validator.min) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tmaxlength: {
\t\t\t\tname: \"maxlength\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {maxlength: \$this.data(\"validation\" + name + \"Maxlength\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn ((value.length > validator.maxlength) && ! validator.negative)
\t\t\t\t\t\t|| ((value.length <= validator.maxlength) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tminlength: {
\t\t\t\tname: \"minlength\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {minlength: \$this.data(\"validation\" + name + \"Minlength\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn ((value.length < validator.minlength) && ! validator.negative)
\t\t\t\t\t\t|| ((value.length >= validator.minlength) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tmaxchecked: {
\t\t\t\tname: \"maxchecked\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\tvar elements = \$this.parents(\"form\").first().find(\"[name=\\\"\" + \$this.attr(\"name\") + \"\\\"]\");
\t\t\t\t\telements.bind(\"click.validation\", function () {
\t\t\t\t\t\t\$this.trigger(\"change.validation\", {includeEmpty: true});
\t\t\t\t\t});
\t\t\t\t\treturn {maxchecked: \$this.data(\"validation\" + name + \"Maxchecked\"), elements: elements};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (validator.elements.filter(\":checked\").length > validator.maxchecked && ! validator.negative)
\t\t\t\t\t\t|| (validator.elements.filter(\":checked\").length <= validator.maxchecked && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t},
\t\t\tminchecked: {
\t\t\t\tname: \"minchecked\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\tvar elements = \$this.parents(\"form\").first().find(\"[name=\\\"\" + \$this.attr(\"name\") + \"\\\"]\");
\t\t\t\t\telements.bind(\"click.validation\", function () {
\t\t\t\t\t\t\$this.trigger(\"change.validation\", {includeEmpty: true});
\t\t\t\t\t});
\t\t\t\t\treturn {minchecked: \$this.data(\"validation\" + name + \"Minchecked\"), elements: elements};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (validator.elements.filter(\":checked\").length < validator.minchecked && ! validator.negative)
\t\t\t\t\t\t|| (validator.elements.filter(\":checked\").length >= validator.minchecked && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t}
\t\t},
\t\tbuiltInValidators: {
\t\t\temail: {
\t\t\t\tname: \"Email\",
\t\t\t\ttype: \"shortcut\",
\t\t\t\tshortcut: \"validemail\"
\t\t\t},
\t\t\tvalidemail: {
\t\t\t\tname: \"Validemail\",
\t\t\t\ttype: \"regex\",
\t\t\t\tregex: \"[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\\\\\.[A-Za-z]{2,4}\",
\t\t\t\tmessage: \"Not a valid email address<!-- data-validator-validemail-message to override -->\"
\t\t\t},
\t\t\tpasswordagain: {
\t\t\t\tname: \"Passwordagain\",
\t\t\t\ttype: \"match\",
\t\t\t\tmatch: \"password\",
\t\t\t\tmessage: \"Does not match the given password<!-- data-validator-paswordagain-message to override -->\"
\t\t\t},
\t\t\tpositive: {
\t\t\t\tname: \"Positive\",
\t\t\t\ttype: \"shortcut\",
\t\t\t\tshortcut: \"number,positivenumber\"
\t\t\t},
\t\t\tnegative: {
\t\t\t\tname: \"Negative\",
\t\t\t\ttype: \"shortcut\",
\t\t\t\tshortcut: \"number,negativenumber\"
\t\t\t},
\t\t\tnumber: {
\t\t\t\tname: \"Number\",
\t\t\t\ttype: \"regex\",
\t\t\t\tregex: \"([+-]?\\\\\\d+(\\\\\\.\\\\\\d*)?([eE][+-]?[0-9]+)?)?\",
\t\t\t\tmessage: \"Must be a number<!-- data-validator-number-message to override -->\"
\t\t\t},
\t\t\tinteger: {
\t\t\t\tname: \"Integer\",
\t\t\t\ttype: \"regex\",
\t\t\t\tregex: \"[+-]?\\\\\\d+\",
\t\t\t\tmessage: \"No decimal places allowed<!-- data-validator-integer-message to override -->\"
\t\t\t},
\t\t\tpositivenumber: {
\t\t\t\tname: \"Positivenumber\",
\t\t\t\ttype: \"min\",
\t\t\t\tmin: 0,
\t\t\t\tmessage: \"Must be a positive number<!-- data-validator-positivenumber-message to override -->\"
\t\t\t},
\t\t\tnegativenumber: {
\t\t\t\tname: \"Negativenumber\",
\t\t\t\ttype: \"max\",
\t\t\t\tmax: 0,
\t\t\t\tmessage: \"Must be a negative number<!-- data-validator-negativenumber-message to override -->\"
\t\t\t},
\t\t\trequired: {
\t\t\t\tname: \"Required\",
\t\t\t\ttype: \"required\",
\t\t\t\tmessage: \"This is required<!-- data-validator-required-message to override -->\"
\t\t\t},
\t\t\tcheckone: {
\t\t\t\tname: \"Checkone\",
\t\t\t\ttype: \"minchecked\",
\t\t\t\tminchecked: 1,
\t\t\t\tmessage: \"Check at least one option<!-- data-validation-checkone-message to override -->\"
\t\t\t}
\t\t}
\t};

\tvar formatValidatorName = function (name) {
\t\treturn name
\t\t\t.toLowerCase()
\t\t\t.replace(
\t\t\t\t/(^|\\s)([a-z])/g ,
\t\t\t\tfunction(m,p1,p2) {
\t\t\t\t\treturn p1+p2.toUpperCase();
\t\t\t\t}
\t\t\t)
\t\t;
\t};

\tvar getValue = function (\$this) {
\t\t// Extract the value we're talking about
\t\tvar value = \$this.val();
\t\tvar type = \$this.attr(\"type\");
\t\tif (type === \"checkbox\") {
\t\t\tvalue = (\$this.is(\":checked\") ? value : \"\");
\t\t}
\t\tif (type === \"radio\") {
\t\t\tvalue = (\$('input[name=\"' + \$this.attr(\"name\") + '\"]:checked').length > 0 ? value : \"\");
\t\t}
\t\treturn value;
\t};

  function regexFromString(inputstring) {
\t\treturn new RegExp(\"^\" + inputstring + \"\$\");
\t}

  /**
   * Thanks to Jason Bunting via StackOverflow.com
   *
   * http://stackoverflow.com/questions/359788/how-to-execute-a-javascript-function-when-i-have-its-name-as-a-string#answer-359910
   * Short link: http://tinyurl.com/executeFunctionByName
  **/
  function executeFunctionByName(functionName, context /*, args*/) {
    var args = Array.prototype.slice.call(arguments).splice(2);
    var namespaces = functionName.split(\".\");
    var func = namespaces.pop();
    for(var i = 0; i < namespaces.length; i++) {
      context = context[namespaces[i]];
    }
    return context[func].apply(this, args);
  }

\t\$.fn.jqBootstrapValidation = function( method ) {

\t\tif ( defaults.methods[method] ) {
\t\t\treturn defaults.methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
\t\t} else if ( typeof method === 'object' || ! method ) {
\t\t\treturn defaults.methods.init.apply( this, arguments );
\t\t} else {
\t\t\$.error( 'Method ' +  method + ' does not exist on jQuery.jqBootstrapValidation' );
\t\t\treturn null;
\t\t}

\t};

  \$.jqBootstrapValidation = function (options) {
    \$(\":input\").not(\"[type=image],[type=submit]\").jqBootstrapValidation.apply(this,arguments);
  };

})( jQuery );
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modern-business/js/jqBootstrapValidation.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* jqBootstrapValidation
 * A plugin for automating validation on Twitter Bootstrap formatted forms.
 *
 * v1.3.6
 *
 * License: MIT <http://opensource.org/licenses/mit-license.php> - see LICENSE file
 *
 * http://ReactiveRaven.github.com/jqBootstrapValidation/
 */

(function( \$ ){

\tvar createdElements = [];

\tvar defaults = {
\t\toptions: {
\t\t\tprependExistingHelpBlock: false,
\t\t\tsniffHtml: true, // sniff for 'required', 'maxlength', etc
\t\t\tpreventSubmit: true, // stop the form submit event from firing if validation fails
\t\t\tsubmitError: false, // function called if there is an error when trying to submit
\t\t\tsubmitSuccess: false, // function called just before a successful submit event is sent to the server
            semanticallyStrict: false, // set to true to tidy up generated HTML output
\t\t\tautoAdd: {
\t\t\t\thelpBlocks: true
\t\t\t},
            filter: function () {
                // return \$(this).is(\":visible\"); // only validate elements you can see
                return true; // validate everything
            }
\t\t},
    methods: {
      init : function( options ) {

        var settings = \$.extend(true, {}, defaults);

        settings.options = \$.extend(true, settings.options, options);

        var \$siblingElements = this;

        var uniqueForms = \$.unique(
          \$siblingElements.map( function () {
            return \$(this).parents(\"form\")[0];
          }).toArray()
        );

        \$(uniqueForms).bind(\"submit\", function (e) {
          var \$form = \$(this);
          var warningsFound = 0;
          var \$inputs = \$form.find(\"input,textarea,select\").not(\"[type=submit],[type=image]\").filter(settings.options.filter);
          \$inputs.trigger(\"submit.validation\").trigger(\"validationLostFocus.validation\");

          \$inputs.each(function (i, el) {
            var \$this = \$(el),
              \$controlGroup = \$this.parents(\".control-group\").first();
            if (
              \$controlGroup.hasClass(\"has-warning\")
            ) {
              \$controlGroup.removeClass(\"has-warning\").addClass(\"has-error\");
              warningsFound++;
            }
          });

          \$inputs.trigger(\"validationLostFocus.validation\");

          if (warningsFound) {
            if (settings.options.preventSubmit) {
              e.preventDefault();
            }
            \$form.addClass(\"has-error\");
            if (\$.isFunction(settings.options.submitError)) {
              settings.options.submitError(\$form, e, \$inputs.jqBootstrapValidation(\"collectErrors\", true));
            }
          } else {
            \$form.removeClass(\"has-error\");
            if (\$.isFunction(settings.options.submitSuccess)) {
              settings.options.submitSuccess(\$form, e);
            }
          }
        });

        return this.each(function(){

          // Get references to everything we're interested in
          var \$this = \$(this),
            \$controlGroup = \$this.parents(\".control-group\").first(),
            \$helpBlock = \$controlGroup.find(\".help-block\").first(),
            \$form = \$this.parents(\"form\").first(),
            validatorNames = [];

          // create message container if not exists
          if (!\$helpBlock.length && settings.options.autoAdd && settings.options.autoAdd.helpBlocks) {
              \$helpBlock = \$('<div class=\"help-block\" />');
              \$controlGroup.find('.controls').append(\$helpBlock);
\t\t\t\t\t\t\tcreatedElements.push(\$helpBlock[0]);
          }

          // =============================================================
          //                                     SNIFF HTML FOR VALIDATORS
          // =============================================================

          // *snort sniff snuffle*

          if (settings.options.sniffHtml) {
            var message = \"\";
            // ---------------------------------------------------------
            //                                                   PATTERN
            // ---------------------------------------------------------
            if (\$this.attr(\"pattern\") !== undefined) {
              message = \"Not in the expected format<!-- data-validation-pattern-message to override -->\";
              if (\$this.data(\"validationPatternMessage\")) {
                message = \$this.data(\"validationPatternMessage\");
              }
              \$this.data(\"validationPatternMessage\", message);
              \$this.data(\"validationPatternRegex\", \$this.attr(\"pattern\"));
            }
            // ---------------------------------------------------------
            //                                                       MAX
            // ---------------------------------------------------------
            if (\$this.attr(\"max\") !== undefined || \$this.attr(\"aria-valuemax\") !== undefined) {
              var max = (\$this.attr(\"max\") !== undefined ? \$this.attr(\"max\") : \$this.attr(\"aria-valuemax\"));
              message = \"Too high: Maximum of '\" + max + \"'<!-- data-validation-max-message to override -->\";
              if (\$this.data(\"validationMaxMessage\")) {
                message = \$this.data(\"validationMaxMessage\");
              }
              \$this.data(\"validationMaxMessage\", message);
              \$this.data(\"validationMaxMax\", max);
            }
            // ---------------------------------------------------------
            //                                                       MIN
            // ---------------------------------------------------------
            if (\$this.attr(\"min\") !== undefined || \$this.attr(\"aria-valuemin\") !== undefined) {
              var min = (\$this.attr(\"min\") !== undefined ? \$this.attr(\"min\") : \$this.attr(\"aria-valuemin\"));
              message = \"Too low: Minimum of '\" + min + \"'<!-- data-validation-min-message to override -->\";
              if (\$this.data(\"validationMinMessage\")) {
                message = \$this.data(\"validationMinMessage\");
              }
              \$this.data(\"validationMinMessage\", message);
              \$this.data(\"validationMinMin\", min);
            }
            // ---------------------------------------------------------
            //                                                 MAXLENGTH
            // ---------------------------------------------------------
            if (\$this.attr(\"maxlength\") !== undefined) {
              message = \"Too long: Maximum of '\" + \$this.attr(\"maxlength\") + \"' characters<!-- data-validation-maxlength-message to override -->\";
              if (\$this.data(\"validationMaxlengthMessage\")) {
                message = \$this.data(\"validationMaxlengthMessage\");
              }
              \$this.data(\"validationMaxlengthMessage\", message);
              \$this.data(\"validationMaxlengthMaxlength\", \$this.attr(\"maxlength\"));
            }
            // ---------------------------------------------------------
            //                                                 MINLENGTH
            // ---------------------------------------------------------
            if (\$this.attr(\"minlength\") !== undefined) {
              message = \"Too short: Minimum of '\" + \$this.attr(\"minlength\") + \"' characters<!-- data-validation-minlength-message to override -->\";
              if (\$this.data(\"validationMinlengthMessage\")) {
                message = \$this.data(\"validationMinlengthMessage\");
              }
              \$this.data(\"validationMinlengthMessage\", message);
              \$this.data(\"validationMinlengthMinlength\", \$this.attr(\"minlength\"));
            }
            // ---------------------------------------------------------
            //                                                  REQUIRED
            // ---------------------------------------------------------
            if (\$this.attr(\"required\") !== undefined || \$this.attr(\"aria-required\") !== undefined) {
              message = settings.builtInValidators.required.message;
              if (\$this.data(\"validationRequiredMessage\")) {
                message = \$this.data(\"validationRequiredMessage\");
              }
              \$this.data(\"validationRequiredMessage\", message);
            }
            // ---------------------------------------------------------
            //                                                    NUMBER
            // ---------------------------------------------------------
            if (\$this.attr(\"type\") !== undefined && \$this.attr(\"type\").toLowerCase() === \"number\") {
              message = settings.builtInValidators.number.message;
              if (\$this.data(\"validationNumberMessage\")) {
                message = \$this.data(\"validationNumberMessage\");
              }
              \$this.data(\"validationNumberMessage\", message);
            }
            // ---------------------------------------------------------
            //                                                     EMAIL
            // ---------------------------------------------------------
            if (\$this.attr(\"type\") !== undefined && \$this.attr(\"type\").toLowerCase() === \"email\") {
              message = \"Not a valid email address<!-- data-validator-validemail-message to override -->\";
              if (\$this.data(\"validationValidemailMessage\")) {
                message = \$this.data(\"validationValidemailMessage\");
              } else if (\$this.data(\"validationEmailMessage\")) {
                message = \$this.data(\"validationEmailMessage\");
              }
              \$this.data(\"validationValidemailMessage\", message);
            }
            // ---------------------------------------------------------
            //                                                MINCHECKED
            // ---------------------------------------------------------
            if (\$this.attr(\"minchecked\") !== undefined) {
              message = \"Not enough options checked; Minimum of '\" + \$this.attr(\"minchecked\") + \"' required<!-- data-validation-minchecked-message to override -->\";
              if (\$this.data(\"validationMincheckedMessage\")) {
                message = \$this.data(\"validationMincheckedMessage\");
              }
              \$this.data(\"validationMincheckedMessage\", message);
              \$this.data(\"validationMincheckedMinchecked\", \$this.attr(\"minchecked\"));
            }
            // ---------------------------------------------------------
            //                                                MAXCHECKED
            // ---------------------------------------------------------
            if (\$this.attr(\"maxchecked\") !== undefined) {
              message = \"Too many options checked; Maximum of '\" + \$this.attr(\"maxchecked\") + \"' required<!-- data-validation-maxchecked-message to override -->\";
              if (\$this.data(\"validationMaxcheckedMessage\")) {
                message = \$this.data(\"validationMaxcheckedMessage\");
              }
              \$this.data(\"validationMaxcheckedMessage\", message);
              \$this.data(\"validationMaxcheckedMaxchecked\", \$this.attr(\"maxchecked\"));
            }
          }

          // =============================================================
          //                                       COLLECT VALIDATOR NAMES
          // =============================================================

          // Get named validators
          if (\$this.data(\"validation\") !== undefined) {
            validatorNames = \$this.data(\"validation\").split(\",\");
          }

          // Get extra ones defined on the element's data attributes
          \$.each(\$this.data(), function (i, el) {
            var parts = i.replace(/([A-Z])/g, \",\$1\").split(\",\");
            if (parts[0] === \"validation\" && parts[1]) {
              validatorNames.push(parts[1]);
            }
          });

          // =============================================================
          //                                     NORMALISE VALIDATOR NAMES
          // =============================================================

          var validatorNamesToInspect = validatorNames;
          var newValidatorNamesToInspect = [];

          do // repeatedly expand 'shortcut' validators into their real validators
          {
            // Uppercase only the first letter of each name
            \$.each(validatorNames, function (i, el) {
              validatorNames[i] = formatValidatorName(el);
            });

            // Remove duplicate validator names
            validatorNames = \$.unique(validatorNames);

            // Pull out the new validator names from each shortcut
            newValidatorNamesToInspect = [];
            \$.each(validatorNamesToInspect, function(i, el) {
              if (\$this.data(\"validation\" + el + \"Shortcut\") !== undefined) {
                // Are these custom validators?
                // Pull them out!
                \$.each(\$this.data(\"validation\" + el + \"Shortcut\").split(\",\"), function(i2, el2) {
                  newValidatorNamesToInspect.push(el2);
                });
              } else if (settings.builtInValidators[el.toLowerCase()]) {
                // Is this a recognised built-in?
                // Pull it out!
                var validator = settings.builtInValidators[el.toLowerCase()];
                if (validator.type.toLowerCase() === \"shortcut\") {
                  \$.each(validator.shortcut.split(\",\"), function (i, el) {
                    el = formatValidatorName(el);
                    newValidatorNamesToInspect.push(el);
                    validatorNames.push(el);
                  });
                }
              }
            });

            validatorNamesToInspect = newValidatorNamesToInspect;

          } while (validatorNamesToInspect.length > 0)

          // =============================================================
          //                                       SET UP VALIDATOR ARRAYS
          // =============================================================

          var validators = {};

          \$.each(validatorNames, function (i, el) {
            // Set up the 'override' message
            var message = \$this.data(\"validation\" + el + \"Message\");
            var hasOverrideMessage = (message !== undefined);
            var foundValidator = false;
            message =
              (
                message
                  ? message
                  : \"'\" + el + \"' validation failed <!-- Add attribute 'data-validation-\" + el.toLowerCase() + \"-message' to input to change this message -->\"
              )
            ;

            \$.each(
              settings.validatorTypes,
              function (validatorType, validatorTemplate) {
                if (validators[validatorType] === undefined) {
                  validators[validatorType] = [];
                }
                if (!foundValidator && \$this.data(\"validation\" + el + formatValidatorName(validatorTemplate.name)) !== undefined) {
                  validators[validatorType].push(
                    \$.extend(
                      true,
                      {
                        name: formatValidatorName(validatorTemplate.name),
                        message: message
                      },
                      validatorTemplate.init(\$this, el)
                    )
                  );
                  foundValidator = true;
                }
              }
            );

            if (!foundValidator && settings.builtInValidators[el.toLowerCase()]) {

              var validator = \$.extend(true, {}, settings.builtInValidators[el.toLowerCase()]);
              if (hasOverrideMessage) {
                validator.message = message;
              }
              var validatorType = validator.type.toLowerCase();

              if (validatorType === \"shortcut\") {
                foundValidator = true;
              } else {
                \$.each(
                  settings.validatorTypes,
                  function (validatorTemplateType, validatorTemplate) {
                    if (validators[validatorTemplateType] === undefined) {
                      validators[validatorTemplateType] = [];
                    }
                    if (!foundValidator && validatorType === validatorTemplateType.toLowerCase()) {
                      \$this.data(\"validation\" + el + formatValidatorName(validatorTemplate.name), validator[validatorTemplate.name.toLowerCase()]);
                      validators[validatorType].push(
                        \$.extend(
                          validator,
                          validatorTemplate.init(\$this, el)
                        )
                      );
                      foundValidator = true;
                    }
                  }
                );
              }
            }

            if (! foundValidator) {
              \$.error(\"Cannot find validation info for '\" + el + \"'\");
            }
          });

          // =============================================================
          //                                         STORE FALLBACK VALUES
          // =============================================================

          \$helpBlock.data(
            \"original-contents\",
            (
              \$helpBlock.data(\"original-contents\")
                ? \$helpBlock.data(\"original-contents\")
                : \$helpBlock.html()
            )
          );

          \$helpBlock.data(
            \"original-role\",
            (
              \$helpBlock.data(\"original-role\")
                ? \$helpBlock.data(\"original-role\")
                : \$helpBlock.attr(\"role\")
            )
          );

          \$controlGroup.data(
            \"original-classes\",
            (
              \$controlGroup.data(\"original-clases\")
                ? \$controlGroup.data(\"original-classes\")
                : \$controlGroup.attr(\"class\")
            )
          );

          \$this.data(
            \"original-aria-invalid\",
            (
              \$this.data(\"original-aria-invalid\")
                ? \$this.data(\"original-aria-invalid\")
                : \$this.attr(\"aria-invalid\")
            )
          );

          // =============================================================
          //                                                    VALIDATION
          // =============================================================

          \$this.bind(
            \"validation.validation\",
            function (event, params) {

              var value = getValue(\$this);

              // Get a list of the errors to apply
              var errorsFound = [];

              \$.each(validators, function (validatorType, validatorTypeArray) {
                if (value || value.length || (params && params.includeEmpty) || (!!settings.validatorTypes[validatorType].blockSubmit && params && !!params.submitting)) {
                  \$.each(validatorTypeArray, function (i, validator) {
                    if (settings.validatorTypes[validatorType].validate(\$this, value, validator)) {
                      errorsFound.push(validator.message);
                    }
                  });
                }
              });

              return errorsFound;
            }
          );

          \$this.bind(
            \"getValidators.validation\",
            function () {
              return validators;
            }
          );

          // =============================================================
          //                                             WATCH FOR CHANGES
          // =============================================================
          \$this.bind(
            \"submit.validation\",
            function () {
              return \$this.triggerHandler(\"change.validation\", {submitting: true});
            }
          );
          \$this.bind(
            [
              \"keyup\",
              \"focus\",
              \"blur\",
              \"click\",
              \"keydown\",
              \"keypress\",
              \"change\"
            ].join(\".validation \") + \".validation\",
            function (e, params) {

              var value = getValue(\$this);

              var errorsFound = [];

              \$controlGroup.find(\"input,textarea,select\").each(function (i, el) {
                var oldCount = errorsFound.length;
                \$.each(\$(el).triggerHandler(\"validation.validation\", params), function (j, message) {
                  errorsFound.push(message);
                });
                if (errorsFound.length > oldCount) {
                  \$(el).attr(\"aria-invalid\", \"true\");
                } else {
                  var original = \$this.data(\"original-aria-invalid\");
                  \$(el).attr(\"aria-invalid\", (original !== undefined ? original : false));
                }
              });

              \$form.find(\"input,select,textarea\").not(\$this).not(\"[name=\\\"\" + \$this.attr(\"name\") + \"\\\"]\").trigger(\"validationLostFocus.validation\");

              errorsFound = \$.unique(errorsFound.sort());

              // Were there any errors?
              if (errorsFound.length) {
                // Better flag it up as a warning.
                \$controlGroup.removeClass(\"has-success has-error\").addClass(\"has-warning\");

                // How many errors did we find?
                if (settings.options.semanticallyStrict && errorsFound.length === 1) {
                  // Only one? Being strict? Just output it.
                  \$helpBlock.html(errorsFound[0] + 
                    ( settings.options.prependExistingHelpBlock ? \$helpBlock.data(\"original-contents\") : \"\" ));
                } else {
                  // Multiple? Being sloppy? Glue them together into an UL.
                  \$helpBlock.html(\"<ul role=\\\"alert\\\"><li>\" + errorsFound.join(\"</li><li>\") + \"</li></ul>\" +
                    ( settings.options.prependExistingHelpBlock ? \$helpBlock.data(\"original-contents\") : \"\" ));
                }
              } else {
                \$controlGroup.removeClass(\"has-warning has-error has-success\");
                if (value.length > 0) {
                  \$controlGroup.addClass(\"has-success\");
                }
                \$helpBlock.html(\$helpBlock.data(\"original-contents\"));
              }

              if (e.type === \"blur\") {
                \$controlGroup.removeClass(\"has-success\");
              }
            }
          );
          \$this.bind(\"validationLostFocus.validation\", function () {
            \$controlGroup.removeClass(\"has-success\");
          });
        });
      },
      destroy : function( ) {

        return this.each(
          function() {

            var
              \$this = \$(this),
              \$controlGroup = \$this.parents(\".control-group\").first(),
              \$helpBlock = \$controlGroup.find(\".help-block\").first();

            // remove our events
            \$this.unbind('.validation'); // events are namespaced.
            // reset help text
            \$helpBlock.html(\$helpBlock.data(\"original-contents\"));
            // reset classes
            \$controlGroup.attr(\"class\", \$controlGroup.data(\"original-classes\"));
            // reset aria
            \$this.attr(\"aria-invalid\", \$this.data(\"original-aria-invalid\"));
            // reset role
            \$helpBlock.attr(\"role\", \$this.data(\"original-role\"));
\t\t\t\t\t\t// remove all elements we created
\t\t\t\t\t\tif (createdElements.indexOf(\$helpBlock[0]) > -1) {
\t\t\t\t\t\t\t\$helpBlock.remove();
\t\t\t\t\t\t}

          }
        );

      },
      collectErrors : function(includeEmpty) {

        var errorMessages = {};
        this.each(function (i, el) {
          var \$el = \$(el);
          var name = \$el.attr(\"name\");
          var errors = \$el.triggerHandler(\"validation.validation\", {includeEmpty: true});
          errorMessages[name] = \$.extend(true, errors, errorMessages[name]);
        });

        \$.each(errorMessages, function (i, el) {
          if (el.length === 0) {
            delete errorMessages[i];
          }
        });

        return errorMessages;

      },
      hasErrors: function() {

        var errorMessages = [];

        this.each(function (i, el) {
          errorMessages = errorMessages.concat(
            \$(el).triggerHandler(\"getValidators.validation\") ? \$(el).triggerHandler(\"validation.validation\", {submitting: true}) : []
          );
        });

        return (errorMessages.length > 0);
      },
      override : function (newDefaults) {
        defaults = \$.extend(true, defaults, newDefaults);
      }
    },
\t\tvalidatorTypes: {
      callback: {
        name: \"callback\",
        init: function (\$this, name) {
          return {
            validatorName: name,
            callback: \$this.data(\"validation\" + name + \"Callback\"),
            lastValue: \$this.val(),
            lastValid: true,
            lastFinished: true
          };
        },
        validate: function (\$this, value, validator) {
          if (validator.lastValue === value && validator.lastFinished) {
            return !validator.lastValid;
          }

          if (validator.lastFinished === true)
          {
            validator.lastValue = value;
            validator.lastValid = true;
            validator.lastFinished = false;

            var rrjqbvValidator = validator;
            var rrjqbvThis = \$this;
            executeFunctionByName(
              validator.callback,
              window,
              \$this,
              value,
              function (data) {
                if (rrjqbvValidator.lastValue === data.value) {
                  rrjqbvValidator.lastValid = data.valid;
                  if (data.message) {
                    rrjqbvValidator.message = data.message;
                  }
                  rrjqbvValidator.lastFinished = true;
                  rrjqbvThis.data(\"validation\" + rrjqbvValidator.validatorName + \"Message\", rrjqbvValidator.message);
                  // Timeout is set to avoid problems with the events being considered 'already fired'
                  setTimeout(function () {
                    rrjqbvThis.trigger(\"change.validation\");
                  }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                }
              }
            );
          }

          return false;

        }
      },
      ajax: {
        name: \"ajax\",
        init: function (\$this, name) {
          return {
            validatorName: name,
            url: \$this.data(\"validation\" + name + \"Ajax\"),
            lastValue: \$this.val(),
            lastValid: true,
            lastFinished: true
          };
        },
        validate: function (\$this, value, validator) {
          if (\"\"+validator.lastValue === \"\"+value && validator.lastFinished === true) {
            return validator.lastValid === false;
          }

          if (validator.lastFinished === true)
          {
            validator.lastValue = value;
            validator.lastValid = true;
            validator.lastFinished = false;
            \$.ajax({
              url: validator.url,
              data: \"value=\" + value + \"&field=\" + \$this.attr(\"name\"),
              dataType: \"json\",
              success: function (data) {
                if (\"\"+validator.lastValue === \"\"+data.value) {
                  validator.lastValid = !!(data.valid);
                  if (data.message) {
                    validator.message = data.message;
                  }
                  validator.lastFinished = true;
                  \$this.data(\"validation\" + validator.validatorName + \"Message\", validator.message);
                  // Timeout is set to avoid problems with the events being considered 'already fired'
                  setTimeout(function () {
                    \$this.trigger(\"change.validation\");
                  }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                }
              },
              failure: function () {
                validator.lastValid = true;
                validator.message = \"ajax call failed\";
                validator.lastFinished = true;
                \$this.data(\"validation\" + validator.validatorName + \"Message\", validator.message);
                // Timeout is set to avoid problems with the events being considered 'already fired'
                setTimeout(function () {
                  \$this.trigger(\"change.validation\");
                }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
              }
            });
          }

          return false;

        }
      },
\t\t\tregex: {
\t\t\t\tname: \"regex\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {regex: regexFromString(\$this.data(\"validation\" + name + \"Regex\"))};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (!validator.regex.test(value) && ! validator.negative)
\t\t\t\t\t\t|| (validator.regex.test(value) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\trequired: {
\t\t\t\tname: \"required\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn !!(value.length === 0  && ! validator.negative)
\t\t\t\t\t\t|| !!(value.length > 0 && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t},
\t\t\tmatch: {
\t\t\t\tname: \"match\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\tvar element = \$this.parents(\"form\").first().find(\"[name=\\\"\" + \$this.data(\"validation\" + name + \"Match\") + \"\\\"]\").first();
\t\t\t\t\telement.bind(\"validation.validation\", function () {
\t\t\t\t\t\t\$this.trigger(\"change.validation\", {submitting: true});
\t\t\t\t\t});
\t\t\t\t\treturn {\"element\": element};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (value !== validator.element.val() && ! validator.negative)
\t\t\t\t\t\t|| (value === validator.element.val() && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t},
\t\t\tmax: {
\t\t\t\tname: \"max\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {max: \$this.data(\"validation\" + name + \"Max\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (parseFloat(value, 10) > parseFloat(validator.max, 10) && ! validator.negative)
\t\t\t\t\t\t|| (parseFloat(value, 10) <= parseFloat(validator.max, 10) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tmin: {
\t\t\t\tname: \"min\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {min: \$this.data(\"validation\" + name + \"Min\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (parseFloat(value) < parseFloat(validator.min) && ! validator.negative)
\t\t\t\t\t\t|| (parseFloat(value) >= parseFloat(validator.min) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tmaxlength: {
\t\t\t\tname: \"maxlength\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {maxlength: \$this.data(\"validation\" + name + \"Maxlength\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn ((value.length > validator.maxlength) && ! validator.negative)
\t\t\t\t\t\t|| ((value.length <= validator.maxlength) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tminlength: {
\t\t\t\tname: \"minlength\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\treturn {minlength: \$this.data(\"validation\" + name + \"Minlength\")};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn ((value.length < validator.minlength) && ! validator.negative)
\t\t\t\t\t\t|| ((value.length >= validator.minlength) && validator.negative);
\t\t\t\t}
\t\t\t},
\t\t\tmaxchecked: {
\t\t\t\tname: \"maxchecked\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\tvar elements = \$this.parents(\"form\").first().find(\"[name=\\\"\" + \$this.attr(\"name\") + \"\\\"]\");
\t\t\t\t\telements.bind(\"click.validation\", function () {
\t\t\t\t\t\t\$this.trigger(\"change.validation\", {includeEmpty: true});
\t\t\t\t\t});
\t\t\t\t\treturn {maxchecked: \$this.data(\"validation\" + name + \"Maxchecked\"), elements: elements};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (validator.elements.filter(\":checked\").length > validator.maxchecked && ! validator.negative)
\t\t\t\t\t\t|| (validator.elements.filter(\":checked\").length <= validator.maxchecked && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t},
\t\t\tminchecked: {
\t\t\t\tname: \"minchecked\",
\t\t\t\tinit: function (\$this, name) {
\t\t\t\t\tvar elements = \$this.parents(\"form\").first().find(\"[name=\\\"\" + \$this.attr(\"name\") + \"\\\"]\");
\t\t\t\t\telements.bind(\"click.validation\", function () {
\t\t\t\t\t\t\$this.trigger(\"change.validation\", {includeEmpty: true});
\t\t\t\t\t});
\t\t\t\t\treturn {minchecked: \$this.data(\"validation\" + name + \"Minchecked\"), elements: elements};
\t\t\t\t},
\t\t\t\tvalidate: function (\$this, value, validator) {
\t\t\t\t\treturn (validator.elements.filter(\":checked\").length < validator.minchecked && ! validator.negative)
\t\t\t\t\t\t|| (validator.elements.filter(\":checked\").length >= validator.minchecked && validator.negative);
\t\t\t\t},
        blockSubmit: true
\t\t\t}
\t\t},
\t\tbuiltInValidators: {
\t\t\temail: {
\t\t\t\tname: \"Email\",
\t\t\t\ttype: \"shortcut\",
\t\t\t\tshortcut: \"validemail\"
\t\t\t},
\t\t\tvalidemail: {
\t\t\t\tname: \"Validemail\",
\t\t\t\ttype: \"regex\",
\t\t\t\tregex: \"[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\\\\\.[A-Za-z]{2,4}\",
\t\t\t\tmessage: \"Not a valid email address<!-- data-validator-validemail-message to override -->\"
\t\t\t},
\t\t\tpasswordagain: {
\t\t\t\tname: \"Passwordagain\",
\t\t\t\ttype: \"match\",
\t\t\t\tmatch: \"password\",
\t\t\t\tmessage: \"Does not match the given password<!-- data-validator-paswordagain-message to override -->\"
\t\t\t},
\t\t\tpositive: {
\t\t\t\tname: \"Positive\",
\t\t\t\ttype: \"shortcut\",
\t\t\t\tshortcut: \"number,positivenumber\"
\t\t\t},
\t\t\tnegative: {
\t\t\t\tname: \"Negative\",
\t\t\t\ttype: \"shortcut\",
\t\t\t\tshortcut: \"number,negativenumber\"
\t\t\t},
\t\t\tnumber: {
\t\t\t\tname: \"Number\",
\t\t\t\ttype: \"regex\",
\t\t\t\tregex: \"([+-]?\\\\\\d+(\\\\\\.\\\\\\d*)?([eE][+-]?[0-9]+)?)?\",
\t\t\t\tmessage: \"Must be a number<!-- data-validator-number-message to override -->\"
\t\t\t},
\t\t\tinteger: {
\t\t\t\tname: \"Integer\",
\t\t\t\ttype: \"regex\",
\t\t\t\tregex: \"[+-]?\\\\\\d+\",
\t\t\t\tmessage: \"No decimal places allowed<!-- data-validator-integer-message to override -->\"
\t\t\t},
\t\t\tpositivenumber: {
\t\t\t\tname: \"Positivenumber\",
\t\t\t\ttype: \"min\",
\t\t\t\tmin: 0,
\t\t\t\tmessage: \"Must be a positive number<!-- data-validator-positivenumber-message to override -->\"
\t\t\t},
\t\t\tnegativenumber: {
\t\t\t\tname: \"Negativenumber\",
\t\t\t\ttype: \"max\",
\t\t\t\tmax: 0,
\t\t\t\tmessage: \"Must be a negative number<!-- data-validator-negativenumber-message to override -->\"
\t\t\t},
\t\t\trequired: {
\t\t\t\tname: \"Required\",
\t\t\t\ttype: \"required\",
\t\t\t\tmessage: \"This is required<!-- data-validator-required-message to override -->\"
\t\t\t},
\t\t\tcheckone: {
\t\t\t\tname: \"Checkone\",
\t\t\t\ttype: \"minchecked\",
\t\t\t\tminchecked: 1,
\t\t\t\tmessage: \"Check at least one option<!-- data-validation-checkone-message to override -->\"
\t\t\t}
\t\t}
\t};

\tvar formatValidatorName = function (name) {
\t\treturn name
\t\t\t.toLowerCase()
\t\t\t.replace(
\t\t\t\t/(^|\\s)([a-z])/g ,
\t\t\t\tfunction(m,p1,p2) {
\t\t\t\t\treturn p1+p2.toUpperCase();
\t\t\t\t}
\t\t\t)
\t\t;
\t};

\tvar getValue = function (\$this) {
\t\t// Extract the value we're talking about
\t\tvar value = \$this.val();
\t\tvar type = \$this.attr(\"type\");
\t\tif (type === \"checkbox\") {
\t\t\tvalue = (\$this.is(\":checked\") ? value : \"\");
\t\t}
\t\tif (type === \"radio\") {
\t\t\tvalue = (\$('input[name=\"' + \$this.attr(\"name\") + '\"]:checked').length > 0 ? value : \"\");
\t\t}
\t\treturn value;
\t};

  function regexFromString(inputstring) {
\t\treturn new RegExp(\"^\" + inputstring + \"\$\");
\t}

  /**
   * Thanks to Jason Bunting via StackOverflow.com
   *
   * http://stackoverflow.com/questions/359788/how-to-execute-a-javascript-function-when-i-have-its-name-as-a-string#answer-359910
   * Short link: http://tinyurl.com/executeFunctionByName
  **/
  function executeFunctionByName(functionName, context /*, args*/) {
    var args = Array.prototype.slice.call(arguments).splice(2);
    var namespaces = functionName.split(\".\");
    var func = namespaces.pop();
    for(var i = 0; i < namespaces.length; i++) {
      context = context[namespaces[i]];
    }
    return context[func].apply(this, args);
  }

\t\$.fn.jqBootstrapValidation = function( method ) {

\t\tif ( defaults.methods[method] ) {
\t\t\treturn defaults.methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
\t\t} else if ( typeof method === 'object' || ! method ) {
\t\t\treturn defaults.methods.init.apply( this, arguments );
\t\t} else {
\t\t\$.error( 'Method ' +  method + ' does not exist on jQuery.jqBootstrapValidation' );
\t\t\treturn null;
\t\t}

\t};

  \$.jqBootstrapValidation = function (options) {
    \$(\":input\").not(\"[type=image],[type=submit]\").jqBootstrapValidation.apply(this,arguments);
  };

})( jQuery );
", "modern-business/js/jqBootstrapValidation.js", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\js\\jqBootstrapValidation.js");
    }
}
