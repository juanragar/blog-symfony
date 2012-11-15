<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_4dc83d3b1cb455bbd86e3c79057afe4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  82 => 19,  72 => 16,  64 => 15,  55 => 14,  53 => 13,  49 => 12,  42 => 10,  34 => 7,  23 => 4,  103 => 24,  96 => 22,  94 => 21,  87 => 19,  81 => 18,  74 => 16,  70 => 14,  66 => 12,  48 => 8,  31 => 5,  25 => 4,  22 => 3,  20 => 2,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  176 => 71,  161 => 63,  155 => 60,  145 => 55,  141 => 54,  136 => 51,  134 => 50,  130 => 48,  125 => 46,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  76 => 28,  69 => 26,  61 => 24,  58 => 23,  56 => 9,  17 => 1,  92 => 39,  57 => 22,  46 => 19,  37 => 6,  33 => 4,  29 => 5,  24 => 3,  19 => 2,  44 => 7,  30 => 4,  27 => 3,  170 => 67,  165 => 47,  162 => 46,  157 => 61,  152 => 59,  146 => 34,  140 => 33,  132 => 26,  128 => 47,  124 => 24,  120 => 22,  117 => 21,  111 => 12,  107 => 10,  104 => 9,  98 => 34,  93 => 31,  91 => 20,  86 => 6,  84 => 46,  79 => 40,  77 => 17,  73 => 27,  71 => 39,  63 => 34,  59 => 33,  54 => 30,  52 => 21,  41 => 7,  39 => 9,  32 => 11,  26 => 1,);
    }
}
