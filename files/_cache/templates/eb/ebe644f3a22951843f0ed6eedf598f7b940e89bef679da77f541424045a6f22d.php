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

/* components/form/computerantivirus.html.twig */
class __TwigTemplate_b77787ad0b319650b5ae2b5a6f31b2d23b963700e8fa383fe84734e19808894f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/computerantivirus.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["no_header"] = true;
        // line 38
        $context["no_inventory_footer"] = true;
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "components/form/computerantivirus.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "
    <input type=\"hidden\" name=\"computers_id\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["computers_id"] ?? null) : null), "html", null, true);
        echo "\">

   ";
        // line 44
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["computers_id", twig_get_attribute($this->env, $this->source,         // line 46
($context["computer"] ?? null), "getLink", [], "method", false, false, false, 46), twig_get_attribute($this->env, $this->source,         // line 47
($context["computer"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 47), twig_array_merge(        // line 48
($context["field_options"] ?? null), ($context["params"] ?? null))], 44, $context, $this->getSourceContext());
        // line 49
        echo "

   ";
        // line 51
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_uptodate", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 53
($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_uptodate"] ?? null) : null), __("Up to date"),         // line 55
($context["field_options"] ?? null)], 51, $context, $this->getSourceContext());
        // line 56
        echo "

   ";
        // line 58
        echo twig_call_macro($macros["fields"], "macro_textField", ["antivirus_version", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["antivirus_version"] ?? null) : null), __("Antivirus version"), twig_array_merge(        // line 62
($context["field_options"] ?? null), ($context["params"] ?? null))], 58, $context, $this->getSourceContext());
        // line 63
        echo "

   ";
        // line 65
        echo twig_call_macro($macros["fields"], "macro_textField", ["signature_version", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["signature_version"] ?? null) : null), __("Signature database version"), twig_array_merge(        // line 69
($context["field_options"] ?? null), ($context["params"] ?? null))], 65, $context, $this->getSourceContext());
        // line 70
        echo "

";
    }

    public function getTemplateName()
    {
        return "components/form/computerantivirus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 70,  94 => 69,  93 => 67,  92 => 65,  88 => 63,  86 => 62,  85 => 60,  84 => 58,  80 => 56,  78 => 55,  77 => 53,  76 => 51,  72 => 49,  70 => 48,  69 => 47,  68 => 46,  67 => 44,  62 => 42,  59 => 41,  55 => 40,  50 => 34,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/computerantivirus.html.twig", "/volume1/web/glpi/templates/components/form/computerantivirus.html.twig");
    }
}
