<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3ca7e002579e18e96c866266586143b3ed838af25d9410aa015935e00904ff63 extends Twig_Template
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
        $__internal_db5c7ba5c7f1a0dc260db55fbda372787497eb16dd2f4b581070a61b152b7148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5c7ba5c7f1a0dc260db55fbda372787497eb16dd2f4b581070a61b152b7148->enter($__internal_db5c7ba5c7f1a0dc260db55fbda372787497eb16dd2f4b581070a61b152b7148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9f5f6f1350a36d3f0236b5fa5bd9d0b7cd31c72201e91dfccc39bb2b461e5c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5f6f1350a36d3f0236b5fa5bd9d0b7cd31c72201e91dfccc39bb2b461e5c3f->enter($__internal_9f5f6f1350a36d3f0236b5fa5bd9d0b7cd31c72201e91dfccc39bb2b461e5c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_db5c7ba5c7f1a0dc260db55fbda372787497eb16dd2f4b581070a61b152b7148->leave($__internal_db5c7ba5c7f1a0dc260db55fbda372787497eb16dd2f4b581070a61b152b7148_prof);

        
        $__internal_9f5f6f1350a36d3f0236b5fa5bd9d0b7cd31c72201e91dfccc39bb2b461e5c3f->leave($__internal_9f5f6f1350a36d3f0236b5fa5bd9d0b7cd31c72201e91dfccc39bb2b461e5c3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
