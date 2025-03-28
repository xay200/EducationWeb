<?php
/**
 * Class CourseCountLessonDynamicElementor
 *
 * Dynamic course count lesson elementor.
 *
 * @since 4.2.3.5
 * @version 1.0.0
 */
namespace LearnPress\ExternalPlugin\Elementor\Widgets\Course\Dynamic;
use Elementor\Core\DynamicTags\Tag;
use LearnPress\ExternalPlugin\Elementor\LPDynamicElementor;
use LearnPress\TemplateHooks\Course\SingleCourseTemplate;

defined( 'ABSPATH' ) || exit;

class CourseCountLessonDynamicElementor extends Tag {
	use LPDynamicElementor;

	/**
	 * Declare base properties for dynamic course elementor
	 *
	 * @param array $data
	 */
	public function __construct( array $data = [] ) {
		$this->lp_dynamic_title = 'Course Count Lesson';
		$this->lp_dynamic_name  = 'course-count-lesson';
		parent::__construct( $data );
	}

	/**
	 * Render dynamic course count lesson elementor.
	 *
	 * @return void
	 */
	public function render() {
		$singleCourseTemplate = SingleCourseTemplate::instance();

		try {
			$course = $this->get_course_model();
			if ( ! $course ) {
				return;
			}

			if ( $course->is_offline() ) {
				return;
			}

			echo $singleCourseTemplate->html_count_item( $course, LP_LESSON_CPT );
		} catch ( \Throwable $e ) {
			error_log( $e->getMessage() );
		}
	}
}
