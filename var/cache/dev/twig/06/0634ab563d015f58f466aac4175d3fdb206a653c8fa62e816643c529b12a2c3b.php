<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a45c09c8519e4c4f4d1ef042bc714e49b8f5720ba4b775d01d36ed7edc7ab329 extends Twig_Template
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
        $__internal_5f834c05328ed22cde7038193826cba0963f86072cbc2e9f378b5d4bc7f5254c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f834c05328ed22cde7038193826cba0963f86072cbc2e9f378b5d4bc7f5254c->enter($__internal_5f834c05328ed22cde7038193826cba0963f86072cbc2e9f378b5d4bc7f5254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d5dae296a4f1a8c7adc19ded1e7b54ae2c68575db0e4856de1c8d10cb9d1f865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dae296a4f1a8c7adc19ded1e7b54ae2c68575db0e4856de1c8d10cb9d1f865->enter($__internal_d5dae296a4f1a8c7adc19ded1e7b54ae2c68575db0e4856de1c8d10cb9d1f865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5f834c05328ed22cde7038193826cba0963f86072cbc2e9f378b5d4bc7f5254c->leave($__internal_5f834c05328ed22cde7038193826cba0963f86072cbc2e9f378b5d4bc7f5254c_prof);

        
        $__internal_d5dae296a4f1a8c7adc19ded1e7b54ae2c68575db0e4856de1c8d10cb9d1f865->leave($__internal_d5dae296a4f1a8c7adc19ded1e7b54ae2c68575db0e4856de1c8d10cb9d1f865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
