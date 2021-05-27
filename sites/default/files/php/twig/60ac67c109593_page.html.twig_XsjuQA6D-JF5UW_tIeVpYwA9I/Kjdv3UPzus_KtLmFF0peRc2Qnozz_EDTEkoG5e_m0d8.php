<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/bureau/page.html.twig */
class __TwigTemplate_52d00aba527cbe541d65733dee6e1b517dddcffb9ad66363ad05c6de8b5ac872 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 80];
        $filters = ["escape" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 46
        echo "<div class=\"layout-container\">

  <header role=\"banner\">  
  <nav class=\"nav-collapse\">

        <ul>
<li class=\"menu-item\"><a href=\"#block-views-block-auditoria-social-block-1\" data-scroll>SOBRE AUDITORIA SOCIAL</a></li>
      <li class=\"menu-item\"><a href=\"#block-views-block-auditoria-social-block-2\" data-scroll>ADQUIRA SUA AUDITORIA</a></li>
      <li class=\"menu-item\"><a href=\"#block-views-block-auditoria-social-block-4\" data-scroll>DOCUMENTOS</a></li>
      <li class=\"menu-item presentes\"><a href=\"#block-views-block-perguntas-frequentes-block-1\" data-scroll>PERGUNTAS FREQUENTES</a></li>
      <li class=\"menu-item\"><a href=\"#block-views-block-auditoria-social-block-5\" data-scroll>COMO ADERIR AO PROGRAMA</a></li>
      <li class=\"menu-item presentes\"><a href=\"#block-views-block-auditoria-social-block-3\" data-scroll>POLÍTICA DE COMPRA</a></li>
      
        </ul>

      </nav>
 
     
    
  </header>

  
  ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

  ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 74
        echo "
    <div class=\"layout-content\">
    
      ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 79
        echo "
    ";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 81
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 87
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 91
        echo "
  </main>

  ";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 95
            echo "    <footer role=\"contentinfo\">
      ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 99
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/bureau/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 99,  137 => 96,  134 => 95,  132 => 94,  127 => 91,  121 => 88,  118 => 87,  116 => 86,  113 => 85,  107 => 82,  104 => 81,  102 => 80,  99 => 79,  95 => 77,  90 => 74,  84 => 70,  79 => 68,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/bureau/page.html.twig", "C:\\laragon\\www\\bureau\\themes\\custom\\bureau\\page.html.twig");
    }
}
