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
        $__internal_184f0e3b66cd81669c469ee28f17889b69e0b45d649cde33f65914efb80ec304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184f0e3b66cd81669c469ee28f17889b69e0b45d649cde33f65914efb80ec304->enter($__internal_184f0e3b66cd81669c469ee28f17889b69e0b45d649cde33f65914efb80ec304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fc4c7b7f2cfd7e44ac2171f2128ec35c04eb80e399ffd7ca508c7d5e3fe2d648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4c7b7f2cfd7e44ac2171f2128ec35c04eb80e399ffd7ca508c7d5e3fe2d648->enter($__internal_fc4c7b7f2cfd7e44ac2171f2128ec35c04eb80e399ffd7ca508c7d5e3fe2d648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_184f0e3b66cd81669c469ee28f17889b69e0b45d649cde33f65914efb80ec304->leave($__internal_184f0e3b66cd81669c469ee28f17889b69e0b45d649cde33f65914efb80ec304_prof);

        
        $__internal_fc4c7b7f2cfd7e44ac2171f2128ec35c04eb80e399ffd7ca508c7d5e3fe2d648->leave($__internal_fc4c7b7f2cfd7e44ac2171f2128ec35c04eb80e399ffd7ca508c7d5e3fe2d648_prof);

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
