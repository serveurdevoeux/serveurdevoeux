<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c4375964c9b21c017b973453b4ebf048757e5705d75058740bbcc617ffeb253f extends Twig_Template
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
        $__internal_e61828b3a0de88ad20fe4961f24820a6bc2cebaef8e47696237a6e2770777e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61828b3a0de88ad20fe4961f24820a6bc2cebaef8e47696237a6e2770777e02->enter($__internal_e61828b3a0de88ad20fe4961f24820a6bc2cebaef8e47696237a6e2770777e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e61828b3a0de88ad20fe4961f24820a6bc2cebaef8e47696237a6e2770777e02->leave($__internal_e61828b3a0de88ad20fe4961f24820a6bc2cebaef8e47696237a6e2770777e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
