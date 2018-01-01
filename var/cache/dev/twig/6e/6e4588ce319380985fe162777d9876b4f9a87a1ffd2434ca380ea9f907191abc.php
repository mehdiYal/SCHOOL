<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_dea64690b8c3aeff01d423bcb78ca96dd06269f6a1cd2a788b71ac0f7f92e038 extends Twig_Template
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
        $__internal_850a5bb733f1991070bed3e3cfe98f21caef42cce010901be65ec159f76cb552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850a5bb733f1991070bed3e3cfe98f21caef42cce010901be65ec159f76cb552->enter($__internal_850a5bb733f1991070bed3e3cfe98f21caef42cce010901be65ec159f76cb552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_885bc9cc496b1d1e6a96ed2903b4198c28698d2f3a855632600669af5ec2cc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885bc9cc496b1d1e6a96ed2903b4198c28698d2f3a855632600669af5ec2cc09->enter($__internal_885bc9cc496b1d1e6a96ed2903b4198c28698d2f3a855632600669af5ec2cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_850a5bb733f1991070bed3e3cfe98f21caef42cce010901be65ec159f76cb552->leave($__internal_850a5bb733f1991070bed3e3cfe98f21caef42cce010901be65ec159f76cb552_prof);

        
        $__internal_885bc9cc496b1d1e6a96ed2903b4198c28698d2f3a855632600669af5ec2cc09->leave($__internal_885bc9cc496b1d1e6a96ed2903b4198c28698d2f3a855632600669af5ec2cc09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
