<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_12e6ec947d9b52cd2a6f53927caf3f04eab9d98ec9c56ac3ef608c53a9410094 extends Twig_Template
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
        $__internal_4f92ae9066914ae76fe34d0d5d7a699a6986e0dc221dce95a9b1b27b7d4cab61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f92ae9066914ae76fe34d0d5d7a699a6986e0dc221dce95a9b1b27b7d4cab61->enter($__internal_4f92ae9066914ae76fe34d0d5d7a699a6986e0dc221dce95a9b1b27b7d4cab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4f92ae9066914ae76fe34d0d5d7a699a6986e0dc221dce95a9b1b27b7d4cab61->leave($__internal_4f92ae9066914ae76fe34d0d5d7a699a6986e0dc221dce95a9b1b27b7d4cab61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
