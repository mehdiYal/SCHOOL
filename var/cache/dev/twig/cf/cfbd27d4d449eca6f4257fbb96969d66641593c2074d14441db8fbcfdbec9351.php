<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7cb36860bc157bc0f290f4975ae47f67798f63b45219738a153272b66e7a1dca extends Twig_Template
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
        $__internal_01f8f307460227d290029b77beb61cfb9cfe9ae38be6b88ebec69374e88cf1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f8f307460227d290029b77beb61cfb9cfe9ae38be6b88ebec69374e88cf1da->enter($__internal_01f8f307460227d290029b77beb61cfb9cfe9ae38be6b88ebec69374e88cf1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3199127c10869b5fe3349ab509777ba4d024532a5a3339d3e34db84a7de7139c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3199127c10869b5fe3349ab509777ba4d024532a5a3339d3e34db84a7de7139c->enter($__internal_3199127c10869b5fe3349ab509777ba4d024532a5a3339d3e34db84a7de7139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_01f8f307460227d290029b77beb61cfb9cfe9ae38be6b88ebec69374e88cf1da->leave($__internal_01f8f307460227d290029b77beb61cfb9cfe9ae38be6b88ebec69374e88cf1da_prof);

        
        $__internal_3199127c10869b5fe3349ab509777ba4d024532a5a3339d3e34db84a7de7139c->leave($__internal_3199127c10869b5fe3349ab509777ba4d024532a5a3339d3e34db84a7de7139c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
