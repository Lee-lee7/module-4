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

/* modules/custom/li/templates/li-theme.html.twig */
class __TwigTemplate_e837b5b01587ab729eefedf3ed546e2d18aaee5c83b2e08372fca1d2c2d1724c extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 1, $this->source), "html", null, true);
        echo "

";
        // line 3
        if ((($__internal_compile_0 = (($__internal_compile_1 = ($context["reviews"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["table"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#rows"] ?? null) : null)) {
            // line 4
            echo "  <div style=\"height: auto;\">
    <table style=\"height: auto;\" ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "table"], "method", false, false, true, 5), 5, $this->source), "html", null, true);
            echo ">
      ";
            // line 6
            if ((($__internal_compile_2 = (($__internal_compile_3 = ($context["reviews"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["table"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#header"] ?? null) : null)) {
                // line 7
                echo "        <thead>
          <tr>
            ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_4 = (($__internal_compile_5 = ($context["reviews"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["table"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#header"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 10
                    echo "              <td>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cell"], 10, $this->source), "html", null, true);
                    echo "</td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "          </tr>
        </thead>
      ";
            }
            // line 15
            echo "
      <tbody>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_6 = (($__internal_compile_7 = ($context["reviews"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["table"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#rows"] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 18
                echo "          ";
                $context["row_classes"] = [0 => (( !                // line 19
($context["no_striping"] ?? null)) ? (twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 19), 19, $this->source))) : (""))];
                // line 21
                echo "          <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 21), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                echo ">
            <td class=\"q1\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = $context["row"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["q1"] ?? null) : null), 22, $this->source), "html", null, true);
                echo " </td>
            <td class=\"q2\">";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = $context["row"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["q2"] ?? null) : null), 23, $this->source), "html", null, true);
                echo " </td>
            <td class=\"q3\">";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = $context["row"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["q3"] ?? null) : null), 24, $this->source), "html", null, true);
                echo " </td>
            <td class=\"q4\">";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_11 = $context["row"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["q4"] ?? null) : null), 25, $this->source), "html", null, true);
                echo " </td>
            <td class=\"ytd\">";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = $context["row"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["ytd"] ?? null) : null), 26, $this->source), "html", null, true);
                echo " </td>
          </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </tbody>
    </table>
  </div>
  ";
        } else {
            // line 33
            echo "  <div class=\"page-empty\" style=\"margin: 0 auto; text-align: center; opacity: 0.6;\">
  <h1>The page is empty.</h1>
  <br><h2> No value.</h2>
  <br><h4>Fill out the form at the link</h4>
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/li/templates/li-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 33,  140 => 29,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  102 => 21,  100 => 19,  98 => 18,  81 => 17,  77 => 15,  72 => 12,  63 => 10,  59 => 9,  55 => 7,  53 => 6,  49 => 5,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/li/templates/li-theme.html.twig", "/var/www/web/modules/custom/li/templates/li-theme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "for" => 9, "set" => 18);
        static $filters = array("escape" => 1);
        static $functions = array("cycle" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                ['cycle']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
