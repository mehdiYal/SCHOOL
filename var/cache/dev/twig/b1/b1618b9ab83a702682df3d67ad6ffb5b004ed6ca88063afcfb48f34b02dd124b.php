<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_18d6bc7d5888e75d39b4a9f128d510682c0b27c8a8d9c02875cee9d41a33c64b extends Twig_Template
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
        $__internal_ba6fab670df6e9b85e3570c809f44363a93cfd985f570db65aafc2b7a61fa654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6fab670df6e9b85e3570c809f44363a93cfd985f570db65aafc2b7a61fa654->enter($__internal_ba6fab670df6e9b85e3570c809f44363a93cfd985f570db65aafc2b7a61fa654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_de37a373aa7bbac7361630f1bef7dd6b27261df4a8e08efa90b3e831d1e285de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de37a373aa7bbac7361630f1bef7dd6b27261df4a8e08efa90b3e831d1e285de->enter($__internal_de37a373aa7bbac7361630f1bef7dd6b27261df4a8e08efa90b3e831d1e285de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ba6fab670df6e9b85e3570c809f44363a93cfd985f570db65aafc2b7a61fa654->leave($__internal_ba6fab670df6e9b85e3570c809f44363a93cfd985f570db65aafc2b7a61fa654_prof);

        
        $__internal_de37a373aa7bbac7361630f1bef7dd6b27261df4a8e08efa90b3e831d1e285de->leave($__internal_de37a373aa7bbac7361630f1bef7dd6b27261df4a8e08efa90b3e831d1e285de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
