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
        $__internal_56651981713ffb4b3b3aaf3e278bd727796c371a4157532d51787467ab29efbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56651981713ffb4b3b3aaf3e278bd727796c371a4157532d51787467ab29efbb->enter($__internal_56651981713ffb4b3b3aaf3e278bd727796c371a4157532d51787467ab29efbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f0e06f230324413ba869ced7f5047f2571b433e5e14b98e7c42fec16e8f0885d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e06f230324413ba869ced7f5047f2571b433e5e14b98e7c42fec16e8f0885d->enter($__internal_f0e06f230324413ba869ced7f5047f2571b433e5e14b98e7c42fec16e8f0885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_56651981713ffb4b3b3aaf3e278bd727796c371a4157532d51787467ab29efbb->leave($__internal_56651981713ffb4b3b3aaf3e278bd727796c371a4157532d51787467ab29efbb_prof);

        
        $__internal_f0e06f230324413ba869ced7f5047f2571b433e5e14b98e7c42fec16e8f0885d->leave($__internal_f0e06f230324413ba869ced7f5047f2571b433e5e14b98e7c42fec16e8f0885d_prof);

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
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
