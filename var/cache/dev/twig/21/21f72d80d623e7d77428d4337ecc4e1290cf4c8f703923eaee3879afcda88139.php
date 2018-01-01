<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9de58b6c14c2bee6491d3626e0d6b66cf6de259357fe56d7ba070e80f66bddf6 extends Twig_Template
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
        $__internal_c8f5e72a610bfe1ac71c27b8b97efd500c734e4e0a1923767f16fb37629afc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f5e72a610bfe1ac71c27b8b97efd500c734e4e0a1923767f16fb37629afc65->enter($__internal_c8f5e72a610bfe1ac71c27b8b97efd500c734e4e0a1923767f16fb37629afc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ede98c7ad8c6564e7d175248b32a21b9e3a2adbac30f43a3d4a44ad7b62173c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede98c7ad8c6564e7d175248b32a21b9e3a2adbac30f43a3d4a44ad7b62173c3->enter($__internal_ede98c7ad8c6564e7d175248b32a21b9e3a2adbac30f43a3d4a44ad7b62173c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c8f5e72a610bfe1ac71c27b8b97efd500c734e4e0a1923767f16fb37629afc65->leave($__internal_c8f5e72a610bfe1ac71c27b8b97efd500c734e4e0a1923767f16fb37629afc65_prof);

        
        $__internal_ede98c7ad8c6564e7d175248b32a21b9e3a2adbac30f43a3d4a44ad7b62173c3->leave($__internal_ede98c7ad8c6564e7d175248b32a21b9e3a2adbac30f43a3d4a44ad7b62173c3_prof);

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
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
