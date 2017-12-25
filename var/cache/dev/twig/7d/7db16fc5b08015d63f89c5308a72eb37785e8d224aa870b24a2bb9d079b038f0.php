<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_7863bd6d2b6c9177189d492358bdd9f824af267bd839a735e1e2795cc689fd43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7863bd6d2b6c9177189d492358bdd9f824af267bd839a735e1e2795cc689fd43->enter($__internal_7863bd6d2b6c9177189d492358bdd9f824af267bd839a735e1e2795cc689fd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5fd476682ee643f71ee573ac5a17e3bd24ecde98133dc6cf1faa50aa07d7b929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd476682ee643f71ee573ac5a17e3bd24ecde98133dc6cf1faa50aa07d7b929->enter($__internal_5fd476682ee643f71ee573ac5a17e3bd24ecde98133dc6cf1faa50aa07d7b929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7863bd6d2b6c9177189d492358bdd9f824af267bd839a735e1e2795cc689fd43->leave($__internal_7863bd6d2b6c9177189d492358bdd9f824af267bd839a735e1e2795cc689fd43_prof);

        
        $__internal_5fd476682ee643f71ee573ac5a17e3bd24ecde98133dc6cf1faa50aa07d7b929->leave($__internal_5fd476682ee643f71ee573ac5a17e3bd24ecde98133dc6cf1faa50aa07d7b929_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
