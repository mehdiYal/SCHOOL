<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0b696d7db8675f31e99b2a6e19ea1f778db981c47c8d984c1d1609dd5f67e1ac extends Twig_Template
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
        $__internal_461fabb6fcc77ee2b19209b8c2a6d6420c2dd64425f982f7f11a7d5c3608b968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461fabb6fcc77ee2b19209b8c2a6d6420c2dd64425f982f7f11a7d5c3608b968->enter($__internal_461fabb6fcc77ee2b19209b8c2a6d6420c2dd64425f982f7f11a7d5c3608b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_26f84a20ec7e6c70f1f14ce93cd19d136d7981f596d1c22c924b301cf01d24e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f84a20ec7e6c70f1f14ce93cd19d136d7981f596d1c22c924b301cf01d24e1->enter($__internal_26f84a20ec7e6c70f1f14ce93cd19d136d7981f596d1c22c924b301cf01d24e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_461fabb6fcc77ee2b19209b8c2a6d6420c2dd64425f982f7f11a7d5c3608b968->leave($__internal_461fabb6fcc77ee2b19209b8c2a6d6420c2dd64425f982f7f11a7d5c3608b968_prof);

        
        $__internal_26f84a20ec7e6c70f1f14ce93cd19d136d7981f596d1c22c924b301cf01d24e1->leave($__internal_26f84a20ec7e6c70f1f14ce93cd19d136d7981f596d1c22c924b301cf01d24e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
