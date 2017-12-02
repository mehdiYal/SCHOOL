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
        $__internal_192f486eebfc33fbf5fb98c9d7ada4298b898a423e701bf6e4daa338a3c491a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192f486eebfc33fbf5fb98c9d7ada4298b898a423e701bf6e4daa338a3c491a3->enter($__internal_192f486eebfc33fbf5fb98c9d7ada4298b898a423e701bf6e4daa338a3c491a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b0ea409c0a1b4c88384aa61ec63d7168d3fef0d7812aafa01b19ad6883ae0608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ea409c0a1b4c88384aa61ec63d7168d3fef0d7812aafa01b19ad6883ae0608->enter($__internal_b0ea409c0a1b4c88384aa61ec63d7168d3fef0d7812aafa01b19ad6883ae0608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_192f486eebfc33fbf5fb98c9d7ada4298b898a423e701bf6e4daa338a3c491a3->leave($__internal_192f486eebfc33fbf5fb98c9d7ada4298b898a423e701bf6e4daa338a3c491a3_prof);

        
        $__internal_b0ea409c0a1b4c88384aa61ec63d7168d3fef0d7812aafa01b19ad6883ae0608->leave($__internal_b0ea409c0a1b4c88384aa61ec63d7168d3fef0d7812aafa01b19ad6883ae0608_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
