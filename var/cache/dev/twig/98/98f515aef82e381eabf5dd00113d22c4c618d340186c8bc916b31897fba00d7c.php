<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d419f92c55e03d031904800f7fa8114751b7cf13d159543da6b97755000b29c6 extends Twig_Template
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
        $__internal_327274a4b329dd7b1c859478af17c4af272d8e1bf40fc6b50fd0a773c1a0bba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327274a4b329dd7b1c859478af17c4af272d8e1bf40fc6b50fd0a773c1a0bba4->enter($__internal_327274a4b329dd7b1c859478af17c4af272d8e1bf40fc6b50fd0a773c1a0bba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fefe7279af37e52a3ed0f6c0da7e2149fca4a19e408d7339b94feaaf0131a98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefe7279af37e52a3ed0f6c0da7e2149fca4a19e408d7339b94feaaf0131a98d->enter($__internal_fefe7279af37e52a3ed0f6c0da7e2149fca4a19e408d7339b94feaaf0131a98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_327274a4b329dd7b1c859478af17c4af272d8e1bf40fc6b50fd0a773c1a0bba4->leave($__internal_327274a4b329dd7b1c859478af17c4af272d8e1bf40fc6b50fd0a773c1a0bba4_prof);

        
        $__internal_fefe7279af37e52a3ed0f6c0da7e2149fca4a19e408d7339b94feaaf0131a98d->leave($__internal_fefe7279af37e52a3ed0f6c0da7e2149fca4a19e408d7339b94feaaf0131a98d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
