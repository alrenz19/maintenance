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

/* components/form/computervirtualmachine.html.twig */
class __TwigTemplate_0ba082b18d249394ebaead5cb82a97df4cf7be0b9306e0fe9521a9fd60c81010 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/computervirtualmachine.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false))))) : (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false)))));
        // line 37
        $context["bg"] = "";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 38)) {
            // line 39
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 41
        echo "
<div class=\"asset ";
        // line 42
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 43
        echo twig_include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        echo "

   ";
        // line 45
        $context["params"] = (($context["params"]) ?? ([]));
        // line 46
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 47)];
        // line 49
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">

                  ";
        // line 56
        $context["field_options"] = twig_array_merge(($context["field_options"] ?? null), ($context["params"] ?? null));
        // line 57
        echo "
                  <input type=\"hidden\" name=\"computers_id\"  value=";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["computer"] ?? null), "getID", [], "method", false, false, false, 58), "html", null, true);
        echo ">

                  ";
        // line 60
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["Computer", twig_get_attribute($this->env, $this->source,         // line 62
($context["computer"] ?? null), "getLink", [], "method", false, false, false, 62), twig_get_attribute($this->env, $this->source,         // line 63
($context["computer"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 63),         // line 64
($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
        // line 65
        echo "

                  ";
        // line 67
        $context["is_dynamic_value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::getYesNo", [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["is_dynamic"] ?? null) : null)]);
        // line 68
        echo "                  ";
        echo twig_call_macro($macros["fields"], "macro_field", ["is_dynamic", ($context["is_dynamic_value"] ?? null), __("Automatic Inventory")], 68, $context, $this->getSourceContext());
        echo "

                  ";
        // line 70
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 72
($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null), __("Name"),         // line 74
($context["field_options"] ?? null)], 70, $context, $this->getSourceContext());
        // line 75
        echo "

                  ";
        // line 77
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),         // line 81
($context["field_options"] ?? null)], 77, $context, $this->getSourceContext());
        // line 82
        echo "

                  ";
        // line 84
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["VirtualMachineType", "virtualmachinetypes_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["virtualmachinetypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("VirtualMachineType"),         // line 89
($context["field_options"] ?? null)], 84, $context, $this->getSourceContext());
        // line 90
        echo "

                  ";
        // line 92
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["VirtualMachineSystem", "virtualmachinesystems_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 95
($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["virtualmachinesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("VirtualMachineSystem"),         // line 97
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
        // line 98
        echo "

                  ";
        // line 100
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["VirtualMachineState", "virtualmachinestates_id", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["virtualmachinestates_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("VirtualMachineState"),         // line 105
($context["field_options"] ?? null)], 100, $context, $this->getSourceContext());
        // line 106
        echo "

                  ";
        // line 108
        echo twig_call_macro($macros["fields"], "macro_textField", ["uuid", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 110
($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["uuid"] ?? null) : null), __("UUID"),         // line 112
($context["field_options"] ?? null)], 108, $context, $this->getSourceContext());
        // line 113
        echo "

                  ";
        // line 115
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["Computer",         // line 117
($context["linked_computer"] ?? null), __("Machine"),         // line 119
($context["field_options"] ?? null)], 115, $context, $this->getSourceContext());
        // line 120
        echo "

                  ";
        // line 122
        echo twig_call_macro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 124
($context["item"] ?? null), "fields", [], "any", false, false, false, 124)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["ram"] ?? null) : null), twig_sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")), twig_array_merge(        // line 126
($context["field_options"] ?? null), ["min" => 0])], 122, $context, $this->getSourceContext());
        // line 127
        echo "

                  ";
        // line 129
        echo twig_call_macro($macros["fields"], "macro_numberField", ["vcpu", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 131
($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["vcpu"] ?? null) : null), _x("quantity", "Processors number"), twig_array_merge(        // line 133
($context["field_options"] ?? null), ["min" => 0])], 129, $context, $this->getSourceContext());
        // line 134
        echo "

               </div> ";
        // line 137
        echo "            </div> ";
        // line 138
        echo "         </div> ";
        // line 139
        echo "      </div> ";
        // line 140
        echo "   </div> ";
        // line 141
        echo "
   ";
        // line 142
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "components/form/computervirtualmachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 142,  189 => 141,  187 => 140,  185 => 139,  183 => 138,  181 => 137,  177 => 134,  175 => 133,  174 => 131,  173 => 129,  169 => 127,  167 => 126,  166 => 124,  165 => 122,  161 => 120,  159 => 119,  158 => 117,  157 => 115,  153 => 113,  151 => 112,  150 => 110,  149 => 108,  145 => 106,  143 => 105,  142 => 103,  141 => 100,  137 => 98,  135 => 97,  134 => 95,  133 => 92,  129 => 90,  127 => 89,  126 => 87,  125 => 84,  121 => 82,  119 => 81,  118 => 79,  117 => 77,  113 => 75,  111 => 74,  110 => 72,  109 => 70,  103 => 68,  101 => 67,  97 => 65,  95 => 64,  94 => 63,  93 => 62,  92 => 60,  87 => 58,  84 => 57,  82 => 56,  73 => 49,  71 => 47,  69 => 46,  67 => 45,  62 => 43,  58 => 42,  55 => 41,  51 => 39,  49 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/computervirtualmachine.html.twig", "/volume1/web/glpi/templates/components/form/computervirtualmachine.html.twig");
    }
}
