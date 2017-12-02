<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1510ded2273452cd2fadd5c341acb1711fe5edffa04ef128f8fc21f6ec152c48 extends Twig_Template
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
        $__internal_9c3c8176b7f2ffdd1a875f0d1d2778829489015a8c4d1e2db4bcffa7235010d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3c8176b7f2ffdd1a875f0d1d2778829489015a8c4d1e2db4bcffa7235010d2->enter($__internal_9c3c8176b7f2ffdd1a875f0d1d2778829489015a8c4d1e2db4bcffa7235010d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_5b43d22cc17ba1f4711185422e885bc8ce912b3e69ec68ac472da83869425368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b43d22cc17ba1f4711185422e885bc8ce912b3e69ec68ac472da83869425368->enter($__internal_5b43d22cc17ba1f4711185422e885bc8ce912b3e69ec68ac472da83869425368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9c3c8176b7f2ffdd1a875f0d1d2778829489015a8c4d1e2db4bcffa7235010d2->leave($__internal_9c3c8176b7f2ffdd1a875f0d1d2778829489015a8c4d1e2db4bcffa7235010d2_prof);

        
        $__internal_5b43d22cc17ba1f4711185422e885bc8ce912b3e69ec68ac472da83869425368->leave($__internal_5b43d22cc17ba1f4711185422e885bc8ce912b3e69ec68ac472da83869425368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
