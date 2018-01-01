<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_83949cc7ffcdd9fa2f00b4e6abc15329b50605fbc094ecf896119e8beaedfb2e extends Twig_Template
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
        $__internal_704136d645f34c692d1e1dbfd1e2c802758839ecfc4536d20588dc3c0fb93546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704136d645f34c692d1e1dbfd1e2c802758839ecfc4536d20588dc3c0fb93546->enter($__internal_704136d645f34c692d1e1dbfd1e2c802758839ecfc4536d20588dc3c0fb93546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_52db27a90d006b21b58a38eb322a1ace6b5c8fd5f25f8cec77eb40e3abd4f778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52db27a90d006b21b58a38eb322a1ace6b5c8fd5f25f8cec77eb40e3abd4f778->enter($__internal_52db27a90d006b21b58a38eb322a1ace6b5c8fd5f25f8cec77eb40e3abd4f778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_704136d645f34c692d1e1dbfd1e2c802758839ecfc4536d20588dc3c0fb93546->leave($__internal_704136d645f34c692d1e1dbfd1e2c802758839ecfc4536d20588dc3c0fb93546_prof);

        
        $__internal_52db27a90d006b21b58a38eb322a1ace6b5c8fd5f25f8cec77eb40e3abd4f778->leave($__internal_52db27a90d006b21b58a38eb322a1ace6b5c8fd5f25f8cec77eb40e3abd4f778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
