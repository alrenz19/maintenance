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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_39d5f743019ebf9a4f67c35f81318734444b79600ad87f7fb541745f6c78b69f extends Template
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
        // line 33
        echo "
";
        // line 34
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 35
        echo "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto\">
    ";
        // line 37
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        } else {
            // line 40
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 43
        echo "
   ";
        // line 44
        $context["status_closed"] = twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 44));
        // line 45
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 46
            echo "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 47
            echo "      ";
            $context["entry_object"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($__internal_compile_2 = $context["entry"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null));
            // line 48
            echo "      ";
            $context["users_id"] = (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id"] ?? null) : null);
            // line 49
            echo "      ";
            $context["is_private"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_private"] ?? null) : null)))) ? ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_private"] ?? null) : null)) : (false));
            // line 50
            echo "      ";
            $context["date_creation"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date_creation"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_creation"] ?? null) : null)) : ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date"] ?? null) : null)));
            // line 51
            echo "      ";
            $context["date_mod"] = (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_mod"] ?? null) : null);
            // line 52
            echo "      ";
            $context["entry_rand"] = twig_random($this->env);
            // line 53
            echo "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 54
            echo "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 55
            echo "
      ";
            // line 56
            $context["can_edit_i"] = (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["can_edit"] ?? null) : null);
            // line 57
            echo "
      ";
            // line 58
            $context["timeline_position"] = (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["timeline_position"] ?? null) : null);
            // line 59
            echo "      ";
            $context["item_position"] = "t-left";
            // line 60
            echo "      ";
            if ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 61
                echo "         ";
                $context["item_position"] = "t-left";
                // line 62
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 63
                echo "         ";
                $context["item_position"] = "t-left t-middle";
                // line 64
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 65
                echo "         ";
                $context["item_position"] = "t-right t-middle";
                // line 66
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 67
                echo "         ";
                $context["item_position"] = "t-right";
                // line 68
                echo "      ";
            }
            // line 69
            echo "
      ";
            // line 70
            $context["itiltype"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 70)) ? (("ITIL" . (($__internal_compile_13 = $context["entry"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["itiltype"] ?? null) : null))) : ((($__internal_compile_14 = $context["entry"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null)));
            // line 71
            echo "
      ";
            // line 72
            $context["state_class"] = "";
            // line 73
            echo "      ";
            if (((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 74
                echo "         ";
                $context["state_class"] = "info";
                // line 75
                echo "      ";
            }
            // line 76
            echo "      ";
            if (((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 77
                echo "         ";
                $context["state_class"] = "todo";
                // line 78
                echo "      ";
            }
            // line 79
            echo "      ";
            if (((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 80
                echo "         ";
                $context["state_class"] = "done";
                // line 81
                echo "      ";
            }
            // line 82
            echo "
      ";
            // line 83
            $context["solution_class"] = "";
            // line 84
            echo "      ";
            if ((((($context["itiltype"] ?? null) == "ITILSolution") || (($context["itiltype"] ?? null) == "ITILValidation")) && twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "status", [], "array", true, true, false, 84))) {
                // line 85
                echo "         ";
                $context["status"] = (((($context["itiltype"] ?? null) == "ITILSolution")) ? ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["status"] ?? null) : null)) : (twig_replace_filter((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["status"] ?? null) : null), ["status_" => ""])));
                // line 86
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::WAITING"))) {
                    // line 87
                    echo "            ";
                    $context["solution_class"] = "waiting";
                    // line 88
                    echo "         ";
                }
                // line 89
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::ACCEPTED"))) {
                    // line 90
                    echo "            ";
                    $context["solution_class"] = "accepted";
                    // line 91
                    echo "         ";
                }
                // line 92
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::REFUSED"))) {
                    // line 93
                    echo "            ";
                    $context["solution_class"] = "refused";
                    // line 94
                    echo "         ";
                }
                // line 95
                echo "      ";
            }
            // line 96
            echo "
      <div class=\"timeline-item mb-3 ";
            // line 97
            echo twig_escape_filter($this->env, ($context["itiltype"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["state_class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_compile_20 = $context["entry"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["class"] ?? null) : null), "html", null, true);
            echo " ";
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            echo "\"
            data-itemtype=\"";
            // line 98
            echo twig_escape_filter($this->env, (($__internal_compile_21 = $context["entry"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["type"] ?? null) : null), "html", null, true);
            echo "\" data-items-id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_22 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), "html", null, true);
            echo "\"
            ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 99)) {
                echo "data-item-action=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_23 = $context["entry"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["item_action"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">

         ";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 104
            echo ((twig_in_filter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 105
            if (((($__internal_compile_24 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 106
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 107
                    echo "                     <span class=\"state state_1\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_25 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 109
                    echo "                     <span class=\"state state_1\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 111
                echo "               ";
            } elseif (((($__internal_compile_26 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 112
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 113
                    echo "                     <span class=\"state state_2\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_27 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 115
                    echo "                     <span class=\"state state_2\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 117
                echo "               ";
            }
            // line 118
            echo "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 120
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            echo "\">
               ";
            // line 121
            $context["avatar_rand"] = twig_random($this->env);
            // line 122
            echo "               ";
            // line 123
            echo "               ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))) : (null));
            // line 124
            echo "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 125
                echo "                  ";
                $context["user_fields"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 125), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source,                 // line 126
($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 126)), "email" => twig_get_attribute($this->env, $this->source,                 // line 127
($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 127)]);
                // line 129
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 130
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 131
($context["users_id"] ?? null), "enable_anonymization" =>                 // line 132
($context["anonym_user"] ?? null)], false);
                // line 133
                echo "
                  </span>
                  ";
                // line 135
                if (( !($context["anonym_user"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "canView", [], "method", false, false, false, 135))) {
                    // line 136
                    echo "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 138
($context["user_fields"] ?? null), "enable_anonymization" => false], false), 1 => ["applyto" => ("timeline-avatar" .                     // line 141
($context["avatar_rand"] ?? null))]]);
                    // line 143
                    echo "                  ";
                }
                // line 144
                echo "               ";
            } else {
                // line 145
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 147
            echo "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"mt-2 timeline-content ";
            // line 149
            echo twig_escape_filter($this->env, ($context["solution_class"] ?? null), "html", null, true);
            echo " flex-grow-1 ";
            echo twig_escape_filter($this->env, ($context["item_position"] ?? null), "html", null, true);
            echo " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 151
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig");
            echo "

                     ";
            // line 153
            if (twig_in_filter(($context["itiltype"] ?? null), twig_array_column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 154
                echo "                        ";
                $context["matching_types"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 154) == ($context["itiltype"] ?? null)); });
                // line 155
                echo "                        ";
                if ((twig_length_filter($this->env, ($context["matching_types"] ?? null)) > 0)) {
                    // line 156
                    echo "                           ";
                    $context["timeline_itemtype"] = twig_first($this->env, ($context["matching_types"] ?? null));
                    // line 157
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 157)) {
                        // line 158
                        echo "                              ";
                        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 158), ["form_mode" => "view"]);
                        echo "
                           ";
                    }
                    // line 160
                    echo "                        ";
                }
                // line 161
                echo "                     ";
            } else {
                // line 162
                echo "                        <div class=\"read-only-content\">
                           ";
                // line 163
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_28 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["content"] ?? null) : null));
                echo "
                        </div>
                     ";
            }
            // line 166
            echo "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </div>

               ";
            // line 172
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 172)) {
                // line 173
                echo "                  ";
                echo twig_include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 174
($context["item"] ?? null), "entry" =>                 // line 175
$context["entry"]]);
                // line 176
                echo "
               ";
            }
            // line 178
            echo "            </div>
         </div>

         ";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "
    ";
        // line 185
        if (($context["is_timeline_reversed"] ?? null)) {
            // line 186
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        }
        // line 188
        echo "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 190
        echo twig_escape_filter($this->env, _n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 193
        echo twig_include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        echo "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 196
        echo twig_escape_filter($this->env, _n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 199
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 200
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 201
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 203
        echo "
</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        echo "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 222), "html", null, true);
        echo "',
            '";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 223), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["id"] ?? null) : null), "html", null, true);
        echo ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 223,  528 => 222,  522 => 219,  504 => 203,  499 => 201,  494 => 200,  492 => 199,  486 => 196,  480 => 193,  474 => 190,  470 => 188,  464 => 186,  462 => 185,  459 => 184,  442 => 181,  437 => 178,  433 => 176,  431 => 175,  430 => 174,  428 => 173,  426 => 172,  418 => 166,  412 => 163,  409 => 162,  406 => 161,  403 => 160,  397 => 158,  394 => 157,  391 => 156,  388 => 155,  385 => 154,  383 => 153,  378 => 151,  371 => 149,  367 => 147,  361 => 145,  358 => 144,  355 => 143,  353 => 141,  352 => 138,  350 => 136,  348 => 135,  344 => 133,  342 => 132,  341 => 131,  340 => 130,  335 => 129,  333 => 127,  332 => 126,  330 => 125,  327 => 124,  324 => 123,  322 => 122,  320 => 121,  316 => 120,  312 => 118,  309 => 117,  303 => 115,  295 => 113,  292 => 112,  289 => 111,  283 => 109,  275 => 107,  272 => 106,  270 => 105,  266 => 104,  260 => 101,  251 => 99,  245 => 98,  235 => 97,  232 => 96,  229 => 95,  226 => 94,  223 => 93,  220 => 92,  217 => 91,  214 => 90,  211 => 89,  208 => 88,  205 => 87,  202 => 86,  199 => 85,  196 => 84,  194 => 83,  191 => 82,  188 => 81,  185 => 80,  182 => 79,  179 => 78,  176 => 77,  173 => 76,  170 => 75,  167 => 74,  164 => 73,  162 => 72,  159 => 71,  157 => 70,  154 => 69,  151 => 68,  148 => 67,  145 => 66,  142 => 65,  139 => 64,  136 => 63,  133 => 62,  130 => 61,  127 => 60,  124 => 59,  122 => 58,  119 => 57,  117 => 56,  114 => 55,  111 => 54,  108 => 53,  105 => 52,  102 => 51,  99 => 50,  96 => 49,  93 => 48,  90 => 47,  87 => 46,  69 => 45,  67 => 44,  64 => 43,  59 => 41,  54 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/volume1/web/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
