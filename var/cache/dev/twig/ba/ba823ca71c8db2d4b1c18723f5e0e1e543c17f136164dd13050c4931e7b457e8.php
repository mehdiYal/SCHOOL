<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1537d57bd11842ca7b133a1a9bd3979faa78b5bfe1c1ba7c52c17bb70678b6c0 extends Twig_Template
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
        $__internal_4ed515822438ca6a5c681403668d813aeff9dc48cf7f62e99bf754fe3efb67e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed515822438ca6a5c681403668d813aeff9dc48cf7f62e99bf754fe3efb67e8->enter($__internal_4ed515822438ca6a5c681403668d813aeff9dc48cf7f62e99bf754fe3efb67e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_afc0d0d9a7806bf34b1ed67e665ef0355bfdb269dc0ca8f6964d1d2bbf9ea46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc0d0d9a7806bf34b1ed67e665ef0355bfdb269dc0ca8f6964d1d2bbf9ea46b->enter($__internal_afc0d0d9a7806bf34b1ed67e665ef0355bfdb269dc0ca8f6964d1d2bbf9ea46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4ed515822438ca6a5c681403668d813aeff9dc48cf7f62e99bf754fe3efb67e8->leave($__internal_4ed515822438ca6a5c681403668d813aeff9dc48cf7f62e99bf754fe3efb67e8_prof);

        
        $__internal_afc0d0d9a7806bf34b1ed67e665ef0355bfdb269dc0ca8f6964d1d2bbf9ea46b->leave($__internal_afc0d0d9a7806bf34b1ed67e665ef0355bfdb269dc0ca8f6964d1d2bbf9ea46b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
