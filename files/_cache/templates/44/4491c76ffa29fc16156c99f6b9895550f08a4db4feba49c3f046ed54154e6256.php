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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_e4f268be10c6efe3a4797f40f0d9dfb163b2de9190ff21e167210931b3c10182 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 35
        if ( !array_key_exists("css_files", $context)) {
            // line 36
            echo "   ";
            $context["css_files"] = [0 => ["path" => "public/lib/base.css"], 1 => ["path" => (("css/palettes/" .             // line 38
($context["theme"] ?? null)) . ".scss")]];
            // line 40
            echo "   ";
        }
        // line 42
        if ( !array_key_exists("js_files", $context)) {
            // line 43
            echo "   ";
            $context["js_files"] = [0 => ["path" => "public/lib/base.js"], 1 => ["path" => "js/common.js"]];
        }
        // line 48
        echo "
";
        // line 49
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 53
        $context["style"] = null;
        // line 54
        echo "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 55
            echo "            ";
            $context["style"] = "max-width: 40rem";
            // line 56
            echo "         ";
        }
        // line 57
        echo "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 58
            echo "            ";
            $context["style"] = "max-width: 60rem";
            // line 59
            echo "         ";
        }
        // line 60
        echo "
         <div class=\"container-tight py-6\" ";
        // line 61
        if ( !(null === ($context["style"] ?? null))) {
            echo "style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md\">
               <div class=\"card-body\">
               ";
        // line 69
        $this->displayBlock('content_block', $context, $blocks);
        // line 70
        echo "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 74
        $this->displayBlock('footer_block', $context, $blocks);
        // line 75
        echo "            </div>
         </div>
      </div>
   </div>

   ";
        // line 80
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 81
        echo "</body>
</html>
";
    }

    // line 69
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 74
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 80
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 80,  139 => 74,  133 => 69,  127 => 81,  125 => 80,  118 => 75,  116 => 74,  110 => 70,  108 => 69,  93 => 61,  90 => 60,  87 => 59,  84 => 58,  81 => 57,  78 => 56,  75 => 55,  72 => 54,  70 => 53,  63 => 49,  60 => 48,  56 => 43,  54 => 42,  51 => 40,  49 => 38,  47 => 36,  45 => 35,  43 => 34,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2023 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set theme = config('palette') %}
{% if css_files is not defined %}
   {% set css_files = [
       {'path': 'public/lib/base.css'},
       {'path': 'css/palettes/' ~ theme ~ '.scss'}
   ] %}
   {# TODO : load hight contrast css #}
{% endif %}
{% if js_files is not defined %}
   {% set js_files = [
       {'path': 'public/lib/base.js'},
       {'path': 'js/common.js'}
   ] %}
{% endif %}

{{ include('layout/parts/head.html.twig') }}
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         {% set style = null %}
         {% if card_md_width is defined %}
            {% set style = 'max-width: 40rem' %}
         {% endif %}
         {% if card_bg_width is defined %}
            {% set style = 'max-width: 60rem' %}
         {% endif %}

         <div class=\"container-tight py-6\" {% if style is not null %}style=\"{{ style }}\"{% endif %}>
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md\">
               <div class=\"card-body\">
               {% block content_block %}{% endblock %}
               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               {% block footer_block %}{% endblock %}
            </div>
         </div>
      </div>
   </div>

   {% block javascript_block %}{% endblock %}
</body>
</html>
", "layout/page_card_notlogged.html.twig", "/volume1/web/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
