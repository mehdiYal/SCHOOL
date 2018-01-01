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
        $__internal_ca2ab3a5fe1652686a1e0a641b30600fe59e98398a32a67a786e0db29151d92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2ab3a5fe1652686a1e0a641b30600fe59e98398a32a67a786e0db29151d92a->enter($__internal_ca2ab3a5fe1652686a1e0a641b30600fe59e98398a32a67a786e0db29151d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9456b2ef42346409f22b752c34ce92e322f381b2c67bb0e94b131505c20b2c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9456b2ef42346409f22b752c34ce92e322f381b2c67bb0e94b131505c20b2c8a->enter($__internal_9456b2ef42346409f22b752c34ce92e322f381b2c67bb0e94b131505c20b2c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ca2ab3a5fe1652686a1e0a641b30600fe59e98398a32a67a786e0db29151d92a->leave($__internal_ca2ab3a5fe1652686a1e0a641b30600fe59e98398a32a67a786e0db29151d92a_prof);

        
        $__internal_9456b2ef42346409f22b752c34ce92e322f381b2c67bb0e94b131505c20b2c8a->leave($__internal_9456b2ef42346409f22b752c34ce92e322f381b2c67bb0e94b131505c20b2c8a_prof);

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
